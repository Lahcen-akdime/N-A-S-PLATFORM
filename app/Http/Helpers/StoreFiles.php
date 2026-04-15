<?php
namespace App\Http\Helpers ;

use Illuminate\Support\Str;

class StoreFiles {
    static public function StoreFileAndGetPath($file,$id,$fileType):string{
        $uniqueName = (Str::random(20)) ;
            $extention = ($file)->extension() ;
            $fileName = $uniqueName .'.'. $extention ;
            $path = $file->storeAs('workers/'.$id.'/'.$fileType,$fileName,
            'public');
        return $path ;
    }



}