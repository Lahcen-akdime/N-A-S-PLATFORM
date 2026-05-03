<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Validator;
use App\Http\Requests\clientStoreRequest;
use App\Models\client;
use App\Models\User;
use App\Models\work;
// use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Auth::user()->role ;
        $user = User::find(Auth::user()->id)->with('client')->first();
        return view('client.home',compact('user','role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = 'visitor' ;
        return view('Auth.client_register',compact('role')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(clientStoreRequest $request)
    {
            $user = User::create([
                'name' => $request->name ,
                'email' => $request->email ,
                'password' => $request->password ,
                'role' => 'client' ,
            ]);
            client::create([
                'ville' => $request->ville ,
                'adress' => $request->adress ,
                'user_id'=>$user->id ,
            ]);
            Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        return to_route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        $role = Auth::user()->role ;
        return view('ClientProfile',compact('role','client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        $role = 'client';
        return view('Client.EditProfile',compact('client','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
            $client->user->update([
                'name' => $request->name ,
            ]);
            $client->update([
                'ville' => $request->ville ,
                'adress' => $request->adress ,
            ]);
            return to_route('client.show',compact('client'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}
