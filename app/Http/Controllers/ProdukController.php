<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("product.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   melakukan validasi terlebih dahulu
    $valid = $request->validate([
        "nm_produk" => "required | string | max:70",
        "harga" => "required | numeric",
        "deskripsi" => "required",
        "foto" => "required | image | max:2048"
    ]);
    // menambahkan foto ke dalam strage
    $foto = $request->file('foto');

    // tambah kan data dan path ke dalam database
    $path = $this->upload($foto,"produk");
    if($path){
        $valid["foto"] = $path;
        Product::create($valid);
    }
    return redirect()->route("produk.index")->with("success","Berhasil menambahkan product");
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
