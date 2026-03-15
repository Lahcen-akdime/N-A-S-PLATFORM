<?php
namespace App\Http\Helpers ;
class Validator {
public static function loginValidator($request){
    $request->validate([
            "email" => 'required|string',
            "password" => 'required|string'
        ]);
}
}