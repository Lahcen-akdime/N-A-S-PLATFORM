<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Worker;
use Illuminate\Http\Request;

class UsersController 
{
    public function index() {
        $role = 'admin' ;
        $workers = Worker::where('is_accepted','=',true)->get();
        $clients = Client::all();
        return view('Admin.Users',compact('role','workers','clients'));
    }
    public function destroy($id) {
        $worker = Worker::find($id);
        $user = $worker->user ;
        $worker->delete();
        $user->delete();
        return to_route('Admin.index');
    }
}
