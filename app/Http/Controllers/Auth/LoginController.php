<?php
namespace App\Http\Controllers\Auth ;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Rediraction;
use App\Http\Helpers\Validator;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
    return view('Auth.login');
    }
    public function show(){

    }
    public function create(){
      return view('Auth.login');
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
      return view('ShooseRole');
    }
    public function Logout(){
      Auth::logout();
      return to_route('home');

    }
}