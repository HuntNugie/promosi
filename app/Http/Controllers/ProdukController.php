<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("product.index",["produks" => Product::all()]);
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
    try {
     $path = $this->upload($foto,"produk");
    if($path){
        $valid["foto"] = $path;
        Product::create($valid);
    }
    return redirect()->route("produk.index")->with("success","Berhasil menambahkan product");
    } catch (\Exception $th) {
        //throw $th;
        return back()->withErrors("Terjadi Kesalahan ".$th->getMessage());
    }
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
    public function edit(Product $produk)
    {
        return view("product.edit",compact("produk"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $produk)
    {
     //   melakukan validasi terlebih dahulu
    $valid = $request->validate([
        "nm_produk" => "required | string | max:70",
        "harga" => "required | numeric",
        "deskripsi" => "required",
        "foto" => " image | max:2048"
    ]);
    // menambahkan foto ke dalam strage
    $foto = $request->file('foto');

    // tambah kan data dan path ke dalam database
    try {
     if($request->hasFile('foto')){
        // cek foto yang ada di storage
        if(Storage::disk("public")->exists($produk->foto)){
            // hapus foto yang lama
            if(Storage::disk("public")->delete($produk->foto)){
                $valid["foto"] = $this->upload($foto,"produk");
            }
        }
     }
     $produk->update($valid);

    return redirect()->route("produk.index")->with("success","Berhasil menambahkan product");
    } catch (\Exception $th) {
        //throw $th;
        return back()->withErrors("Terjadi Kesalahan ".$th->getMessage());
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $produk)
    {

        try {
            // cek terlebih dulu apakah ada foto
        if(Storage::disk("public")->exists($produk->foto)){
            Storage::disk("public")->delete($produk->foto);
        }
        $produk->delete();
        return redirect()->route("produk.index")->with("sukses","Berhasil menghapus data produk");
        } catch (\Exception $th) {
            //throw $th;
            return back()->withErrors("Gagal menghapus data produk karna ".$th->getMessage());
        }
    }

}
