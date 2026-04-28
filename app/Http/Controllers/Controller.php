<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class Controller
{
    public function index(){
    $role = 'visitor' ;
     return view('Home',compact('role')); 
    }
}
