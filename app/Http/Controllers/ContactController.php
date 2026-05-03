<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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
        $role = "admin" ;
        $authenticated = Contact::where('user_id','!=',null)->count();
        $notAuthenticated = Contact::where('user_id','=',null)->count();
        $messages = Contact::all();
        return view('Admin.contact',compact('role','messages','authenticated','notAuthenticated'));
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
    public function store(ContactRequest $request)
    {
        Contact::create([
        'name' => Auth::user()->name ?? $request->name ,
        'email' => Auth::user()->email ?? $request->email ,
        'subject' => $request->subject ,
        'message' => $request->message ,
        'user_id' => Auth::user()->name ?? null
        ]);
        return to_route('contact.create')->with('message','We recive your message seccussfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $role = "admin" ;
        return view('Admin.contactDetails',compact('contact','role'));
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
    public function filter(string $type) {
        if($type != 'all'){
        $role = "admin" ;
        $authenticated = Contact::where('user_id','!=',null)->count();
        $notAuthenticated = Contact::where('user_id','=',null)->count();
            if($type == 'authenticated'){
            $messages = Contact::where('user_id','!=',null)->get();
            }
            if($type == 'anonymos'){
            $messages = Contact::where('user_id','=',null)->get();
            }
            return view('Admin.contact',compact('role','messages','authenticated','notAuthenticated'));
        }
        else{
        return to_route('contact.index');
        }
    }
}
