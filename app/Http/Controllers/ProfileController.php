<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        return view("myProfile.index");
    }
    public function edit(){
        $jabatan = Jabatan::all();
        return view("myProfile.edit",compact("jabatan"));
    }
    public function update(Request $request,User $profile){
       $valid = $request->validate([
        "name" => "required | string",
        "email" => "required | email",
        "jabatan_id" => "required",
        "telepon" => "required",
        "foto" => "  image | max:2048"
       ]);

    //    cek apakah upload foto baru
    if($request->hasFile("foto")){
        // cek foto
        if($profile->foto && Storage::disk("public")->exists($profile->foto)){
            Storage::disk("public")->delete($profile->foto);
        }
    // upload foto
        $valid["foto"] = $this->upload($request->file("foto"),"pegawai");
    }
    // tambahkan update ke database
    $profile->update($valid);
    return redirect()->route("myProfile")->with("sukses","Berhasil mengedit profile");
    }
}
