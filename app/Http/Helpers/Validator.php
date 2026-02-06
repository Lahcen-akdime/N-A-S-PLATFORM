<?php
namespace App\Http\Helpers ;
class Validator {
public static function RegisterValidator($request){
   $request->validate([
            "name" => 'required|string',
            "email" => 'required|string',
            "password" => 'required|string'
        ]);
}
public static function loginValidator($request){
    $request->validate([
            "email" => 'required|string',
            "password" => 'required|string'
        ]);
}
}