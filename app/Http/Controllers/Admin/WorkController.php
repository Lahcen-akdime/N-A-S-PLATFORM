<?php

namespace App\Http\Controllers\Admin;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController 
{
    public function index(){
        $role = 'admin' ;
        $works = Work::with('worker')->get();
        return view('Admin.works',compact('works','role'));
    }
    public function store(Request $request){
        Work::create(['name'=>$request->name]);
        return to_route('work.index');
    }
    public function update(Request $request){
        $work = Work::find($request->workid);
        $work->update(['name'=>$request->name]);
        return to_route('work.index');
    }
}