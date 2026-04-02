<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;

class LocateController extends Controller
{
    public function index($latitude,$longitude,$work,$evaluation)
    {
        $workers = Worker::with('work')->where('evaluation','>=',$evaluation)
                                    //    ->where('workers.work.name','=',$work)
                                       ->get();
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
        // return response()->json([
        //     'latitude' => $latitude ,
        //     'longitude' => $longitude ,
        //     'work' => $work ,
        //     'evaluation' => $evaluation
        // ],200) ;
    }
}
