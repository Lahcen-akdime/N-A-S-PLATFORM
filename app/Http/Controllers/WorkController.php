<?php

namespace App\Http\Controllers;

use App\Models\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($latitude,$longitude,$work,$evaluation)
    {
        return response()->json([
            'latitude' => $latitude ,
            'longitude' => $longitude ,
            'work' => $work ,
            'evaluation' => $evaluation
        ],200) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(work $work)
    {
        //
    }
}
