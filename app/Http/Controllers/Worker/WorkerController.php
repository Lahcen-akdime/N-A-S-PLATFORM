<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Worker.home') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.worker_register') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        'experience_years',
        'work_id',
        'profile_image',
        'work_id',
        'latitude',
        'longitude',
        */
        // $user = User::create([
        //         'name' => $request->name ,
        //         'email' => $request->email ,
        //         'password' => $request->password ,
        //         'role' => 'worker' ,
        // ]);
        // $worker = Worker::create([
        //         'experience_years'=>$request->experience_years,
        //         'work_id'=>$request->work_id,
        //         'profile_image'=>$request->profile_image,
        //         'work_id'=>1,
        //         'latitude'=>'32.255751',
        //         'longitude'=>'-8.536694',
        //         'adress' => $request->adress ,
        //         'user_id'=>$user->id ,
        // ]);
        // Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        // return response()->json([
        //     'userName'=>$user->name ,
        //     'userEmail'=>$user->email ,
        //     'worker_latitude'=>$worker->profile_image 
        // ],200);
        // return response()->json([
        //     'message'=>"welcome" 
        // ],200);
        // return to_route('worker.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $worker = Worker::findOrFail($id) ;
        return view('WorkerProfile',compact('worker'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Worker $worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        //
    }
}
