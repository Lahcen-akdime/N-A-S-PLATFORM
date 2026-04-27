<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Helpers\StoreFiles;
use App\Http\Requests\workerStoreRequest;
use App\Models\Document;
use App\Models\User;
use App\Models\Work;
use App\Models\Worker;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str ;
use PDOException;

class WorkerController 
{

    public function index()
    {
        $role = Auth::user()->role ;
        return view('Worker.home',compact('role')) ;
    }


    public function create()
    {
        $step = 0 ;
        $works = Work::all() ;
        return view('Auth.worker_register',compact('works','step')) ;
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name ,
                'email' => $request->email ,
                'password' => $request->password ,
                'role' => 'worker' ,
            ]);

            $path = StoreFiles::StoreFileAndGetPath($request->profile_image,$user->id,"profile_image") ;

            $worker = Worker::create([
                    'experience_years'=>$request->experience_years,
                    'work_id'=>$request->work_id,
                    'ville'=>$request->ville,
                    'profile_image'=>$path,
                    'phone'=>$request->phone,
                    'latitude'=>$request->latitude,
                    'longitude'=>$request->longitude,
                    'adress' => $request->adress ,
                    'user_id'=>$user->id ,
            ]);

            if($request->deploma){
                $path = StoreFiles::StoreFileAndGetPath($request->deploma,$user->id,"diploma") ;
                Document::create([
                'type' => 'diploma' ,
                'file_path' => $path ,
                'worker_id' => $worker->id 
                ]);
            }
            if($request->certificate){
                $path = StoreFiles::StoreFileAndGetPath($request->certificate,$user->id,"certificate") ;
                Document::create([
                'type' => 'certificate' , 
                'file_path' => $path ,
                'worker_id' => $worker->id
                ]);
            }
            if($request->national_card){
                $path = StoreFiles::StoreFileAndGetPath($request->national_card,$user->id,"national_card") ;
                Document::create([
                'type' => 'national_card' , 
                'file_path' => $path ,
                'worker_id' => $worker->id
                ]);
            }
            DB::commit();
            } catch (PDOException $e) {
                DB::rollBack();
                dd('error : '.$e);
            }
        return to_route('wait');
    }


    public function show($id)
    {
        $role = Auth::user()->role ;
        $worker = Worker::findOrFail($id) ;
        return view('WorkerProfile',compact('worker','role'));
    }


    public function edit(Worker $worker)
    {
        //
    }


    public function update(Request $request, Worker $worker)
    {
        //
    }


    public function destroy(Worker $worker)
    {
        //
    }
    public function wait(){
        return view('Worker.waitVerification');
    }
}