<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Http\Requests\DemandeRequest;
use App\Http\Requests\demandeStoreRequest;
use App\Models\Demande;
use App\Models\work;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController 
{
    
    public function index()
    {
        $role = Auth::user()->role ;
        $user_id = Auth::user()->id ;
        $demandes = Demande::where('client_id','=',$user_id)->get() ;
        return view('client.demandes',compact('demandes','role')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(demandeStoreRequest $request)
    {
        $user_id = Auth::user()->id ;
        Demande::create([
            'title'=>$request->title,
            'client_id'=>$user_id,
            'worker_id'=>$request->worker_id,
            'description'=>$request->description,
            'emergency'=>$request->emergency,
        ]);
        return to_route('demande.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $role = Auth::user()->role ;
        $worker = Worker::findOrFail($id) ;
        return view('Client.demandeValidate',compact('worker','role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demande $demande)
    {
        $demande->update([
            'state' => 'Canceled'
        ]);
        return to_route('demande.index');
    }
}
