<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;

use App\Models\Demande;
use App\Models\work;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController 
{
    
    public function index()
    {
        $role = 'worker' ;
        $user_id = Auth::user()->id ;
        $demandes = Auth::user()->worker->demande ;
        return view('Worker.demandes',compact('demandes','role')) ;
    }


    public function create()
    {
        $role = 'worker' ;
        $works = Work::all() ;
        return view('client.Locate',compact('works','role'));
    }


    public function store(Request $request)
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


    public function show($id)
    {
        $role = 'worker' ;
        $worker = Worker::findOrFail($id) ;
        return view('Client.demandeValidate',compact('worker'));
    }


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
