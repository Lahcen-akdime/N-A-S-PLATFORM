<?php
namespace App\Http\Helpers ;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Rediraction {
public static function redirect(){
$role = Auth::user()->role ;
if($role == 'client'){
    return to_route('client.index');
}
else if($role == 'worker'){
    if(Auth::user()->worker->is_accepted == false){
          return to_route('wait');
    }
    return to_route('worker.index');
}
else{
    return to_route('Admin.index');
}
}
}
