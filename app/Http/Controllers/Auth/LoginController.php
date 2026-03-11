<?php
namespace App\Http\Controllers\Auth ;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Rediraction;
use App\Http\Helpers\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
    Validator::loginValidator($request);
    $credentials = ['email'=>$request->email,'password'=>$request->password];
    if(Auth::attempt($credentials)){
       return Rediraction::redirect();
    }
    else{
       return $this -> show();
    }
    }
    public function show(){
    return view('login');
    }
    public function create(){
    return view('register');
    }
    public function login(){
    
    }
    public function store(Request $request){
    Validator::RegisterValidator($request);
    User::create(array_merge($request->all(),['role'=>'worker']));
    return view('client_space');
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
}