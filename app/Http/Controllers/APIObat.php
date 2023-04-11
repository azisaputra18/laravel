<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Obat;

class APIObat extends Controller {
    public function getObat(){
        return Obat::all();
    }
    public function addObat(){
        request()->validate([ 
            "kode_obat"=>"required",
            "nama_obat"=>"required",
            "expired_obat"=>"required",
            "jumlah"=>"required",
            "hargaperunit"=>"required",
            "image"=>"required"
        ]);
    
        return Obat::create([
            "kode_obat"=>request("kode_obat"),
            "nama_obat"=>request("nama_obat"),
            "expired_obat"=>request("expired_obat"),
            "jumlah"=>request("jumlah"),
            "hargaperunit"=>request("hargaperunit"),
            "image"=>request("image")
        ]);
        
    }

    public function updateObat(Obat $obat){
        request()->validate([ 
            "nama_obat"=>"required",
            "jumlah"=>"required",
            "hargaperunit"=>"required"
        ]);
    
        $succses = $obat->update([
            "nama_obat"=>request("nama_obat"),
            "jumlah"=>request("jumlah"),
            "hargaperunit"=>request("hargaperunit")
        ]);

        return[
            "succses" => $succses,
            "setatus" => 200
        ]; 
    }


    public function deleteObat(Obat $obat){ 
        $succses = $obat ->delete();

        return[
            "succses" => $succses,
            "setatus" => 200
        ]; 
    }
};

