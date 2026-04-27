<?php

namespace App\Http\Controllers;

class Controller
{
    public function index(){
    $role = 'visitor' ;
     return view('Home',compact('role')); 
    }
}
