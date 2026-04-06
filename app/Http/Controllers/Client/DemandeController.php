<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Http\Requests\DemandeRequest;
use App\Models\Demande;
use App\Models\work;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.demandes') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $works = Work::all() ;
        return view('client.Locate',compact('works')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id ;
        Demande::credate([
            'title'=>$request->title,
            'state'=>$request->state,
            'client_id'=>$user_id,
            'worker_id'=>$request->worker_id,
            'description'=>$request->description,
            'emergency'=>$request->emergency,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $worker = Worker::findOrFail($id) ;
        return view('Client.demandeValidate',compact('worker'));
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
        //
    }
}
