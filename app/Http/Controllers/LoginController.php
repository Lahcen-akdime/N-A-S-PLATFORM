<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    
    }
    public function show(){
    
    }
    public function create(Request $request){
    Validator::RegisterValidator($request);
    User::create(array_merge($request->all(),['role'=>'client']));
    return view('client_space');
    }
    public function store(){
    
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}