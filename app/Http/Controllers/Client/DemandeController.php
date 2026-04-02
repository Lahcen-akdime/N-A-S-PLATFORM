<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Http\Requests\DemandeRequest;
use App\Models\Demande;
use App\Models\work;
use Illuminate\Http\Request;

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
        $works = work::all() ;
        return view('client.Locate',compact('works')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Demande $demande)
    {
        //
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
