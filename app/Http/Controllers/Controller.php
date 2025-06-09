<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
     public function upload($foto,String $folder){
        $namaBaru = Str::random()."-".$foto->getClientOriginalName();
        if($path = $foto->storeAs($folder,$namaBaru,"public")){
            return $path;
        }else{
            return false;
        }

    }
}
