<?php

namespace App\Http\Controllers\Admin;

use App\Models\Worker;
use Illuminate\Http\Request;

class UsersController 
{
    public function index() {
        $role = 'admin' ;
        return view('Admin.Users',compact('role'));
    }
    public function destroy($id) {
        $worker = Worker::find($id);
        $user = $worker->user ;
        $worker->delete();
        $user->delete();
        return to_route('Admin.index');
    }
}
