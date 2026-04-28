<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Auth::user()->role ?? 'visitor' ;
        return view('Contact',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $is_authaunticated = false ;
        if(Auth::user()){
        $is_authaunticated = true ;
        }
        Contact::create([
        'name' => Auth::user()->name ?? $request->name ,
        'email' => Auth::user()->email ?? $request->email ,
        'subject' => $request->subject ,
        'message' => $request->message ,
        'is_authaunticated' => $is_authaunticated 
        ]);
        return to_route('contact.create')->with('message','We recive your message seccussfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
