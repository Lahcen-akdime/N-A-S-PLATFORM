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

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Worker.home') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $step = 0 ;
        $works = Work::all() ;
        return view('Auth.worker_register',compact('works','step')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
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
                    'profile_image'=>$path,
                    'phone'=>$request->phone,
                    'latitude'=>'32.255751',
                    'longitude'=>'-8.536694',
                    'adress' => $request->adress ,
                    'user_id'=>$user->id ,
            ]);

            if($request->deploma){
                $path = StoreFiles::StoreFileAndGetPath($request->deploma,$user->id,"deploma") ;
                Document::create([
                'type' => 'deploma' ,
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

            Auth::attempt(['email'=>$request->email,'password'=>$request->password]);

            return to_route('wait');

            DB::commit();
        } catch (PDOException $e) {
            DB::rollBack();
                return response()->json([
                'error'=>$e
                ],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $worker = Worker::findOrFail($id) ;
        return view('WorkerProfile',compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Worker $worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        //
    }
    public function wait(){
        return view('Worker.waitVerification');
    }
    public function test(){
        $test = 'image.png';
        return explode('.',$test)[1];
    }
}