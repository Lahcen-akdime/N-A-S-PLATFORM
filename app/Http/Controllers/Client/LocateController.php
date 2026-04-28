<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocateController 
{
    public function index($work)
    {
        $workers = Worker::with('work')->whereHas('work',function ($query) use ($work){
                                        $query->where('name','=',$work);
                                        })->get();
        if($workers){
            return response()->json([
                'Worker' => $workers ,
            ],200) ;
        }
        else{
           return response()->json([
                'error' => 'workers not found' ,
            ],500) ; 
        }
    }
    public function create() {
         $role = Auth::user()->role ;
        $works = Work::all() ;
        return view('client.Locate',compact('works','role')) ;
    }

}
