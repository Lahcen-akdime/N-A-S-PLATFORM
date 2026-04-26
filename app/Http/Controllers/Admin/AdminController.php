<?php

namespace App\Http\Controllers\Admin;

use App\Models\Demande;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;

class AdminController 
{
    /**
     * Show the form for creating the resource.
     */
    public function index()
    {
        $usersNumber = (User::all()->count())-1;
        $workersNumber = Worker::where('is_accepted','=',true)->where('is_banned','=',false)->count();
        $demandesNumber = Demande::where();
        return view('Admin.Dashboard',compact('usersNumber','workersNumber'));
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
    public function show()
    {
        //
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
