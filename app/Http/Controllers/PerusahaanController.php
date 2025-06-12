<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaan = Perusahaan::first();
     return view("perusahaan.index",compact("perusahaan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view("perusahaan.edit",compact("perusahaan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $valid = $request->validate([
            "nm_perusahaan" => "required | string",
            "tentang" => "required",
            "foto" => "image | max:2048",
            "slug" => "string"
        ]);

       if($request->hasFile("foto")){
         // cek foto di storage
        if(Storage::disk("public")->exists($perusahaan->foto)){
            // hapus
            Storage::disk("public")->delete($perusahaan->foto);
        }
        $valid["foto"] = $this->upload($request->file("foto"),"perusahaan");
       }

    //    buat slug
    $valid["slug"] = Str::slug($request->nm_perusahaan);
    // masukan ke database
    $perusahaan->update($valid);
    return redirect()->route("perusahaan")->with("sukses","Berhasil mengupdate data perusahaan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
