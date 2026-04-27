<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Models\Worker;
use Illuminate\Http\Request;

class LocateController 
{
    public function index($work,$evaluation)
    {
        $workers = Worker::with('work')->where('evaluation','>=',$evaluation)
                                       ->whereHas('work',function ($query) use ($work){
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

}
