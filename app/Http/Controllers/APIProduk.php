<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produk;

class APIProduk extends Controller{
    public function getproduk(){
        return produk::all();
    }
    public function addproduk(){
        request()->validate([ 
            "kode_obat"=>"required",
            "nama_obat"=>"required",
            "expired_obat"=>"required",
            "jumlah"=>"required",
            "harga"=>"required",
            "image"=>"required"
        ]);
    
        return produk::create([
            "kode_obat"=>request("kode_obat"),
            "nama_obat"=>request("nama_obat"),
            "expired_obat"=>request("expired_obat"),
            "jumlah"=>request("jumlah"),
            "harga"=>request("harga"),
            "image"=>request("image")
        ]);
        
    }

    public function updateproduk(produk $produk){
        request()->validate([ 
            "nama_obat"=>"required",
            "jumlah"=>"required",
            "harga"=>"required",
            "image"=>"required"
            
        ]);
    
        $succses = $produk->update([
            "nama_obat"=>request("nama_obat"),
            "jumlah"=>request("jumlah"),
            "harga"=>request("harga"),
            "image"=>request("image")
        ]);

        return[
            "succses" => $succses,
            "setatus" => 200
        ]; 
    }


    public function deleteproduk(produk $produk){ 
        $succses = $produk ->delete();

        return[
            "succses" => $succses,
            "setatus" => 200
        ]; 
    }
}
