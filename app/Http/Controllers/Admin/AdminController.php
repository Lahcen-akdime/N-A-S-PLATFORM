<?php

namespace App\Http\Controllers\Admin;

use App\Models\Demande;
use App\Models\User;
use App\Models\Worker;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController 
{
    /**
     * Show the form for creating the resource.
     */
    public function index()
    {
        $currentTime = Carbon::now()->format('H:i');
        $usersNumber = (User::all()->count())-1;
        $workersNumber = Worker::where('is_accepted','=',true)->where('is_banned','=',false)->count();
        $pendingWorkersNumber = Worker::where('is_accepted','=',false)->count();
        $pendingWorkers = Worker::with('documents','user','work')->where('is_accepted','=',false)
                                                                 ->where('is_banned','=',false)->get();
        $demandesNumber = Demande::all()->count();
        return view('Admin.Dashboard',compact('usersNumber','workersNumber','demandesNumber','pendingWorkersNumber',
                                              'currentTime','pendingWorkers'));
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function accept(Worker $worker)
    {
        $worker->update(['is_accepted'=>true]);
        return to_route('Admin.index');
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
