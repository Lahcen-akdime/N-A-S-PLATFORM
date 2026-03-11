<?php
namespace App\Http\Helpers ;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Rediraction {
public static function redirect(){
$role = Auth::user()->role ;
if($role == 'client'){
    return view('client_space');
}
else if($role == 'worker'){
    return view('worker');
}
else{
    return view('admin_space');
}
}
}
