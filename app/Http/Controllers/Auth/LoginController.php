<?php
namespace App\Http\Controllers\Auth ;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Rediraction;
use App\Http\Helpers\Validator;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController 
{
  public function index(){
    $role = 'visitor' ;
    return view('Auth.login',compact('role'));
    }
    public function show(){

    }
    public function create(){
      $role = 'visitor' ;
      return view('Auth.login',compact('role'));
    }
    public function login(){
    
    }
    public function store(LoginRequest $request){
    $credentials = ['email'=>$request->email,'password'=>$request->password];
    if(Auth::attempt($credentials)){
       return Rediraction::redirect();
    }
    else{
       return to_route('login.index');
    }
    }
    public function edit(){
    
    }
    public function update(){

    }
    public function destroy(){

    }
    public function shoose(){
      $role = 'visitor' ;
      return view('ShooseRole',compact('role'));
    }
    public function Logout(){
      Auth::logout();
      return to_route('home');

    }
}