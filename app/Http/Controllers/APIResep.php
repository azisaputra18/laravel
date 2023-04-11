<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class APIResep extends Controller{
    public function getResep(){
        return Resep::all();
    }
    public function addResep(){
        request()->validate([ 
            "no_resep"=>"required",
            "tgl_resep"=>"required",
            "nama_passien"=>"required",
            "nama_dokter"=>"required",
            "obat_resep"=>"required",
            "jumlah_obatresep"=>"required"
        ]);
    
        return Resep::create([
            "no_resep"=>request("no_resep"),
            "tgl_resep"=>request("tgl_resep"),
            "nama_passien"=>request("nama_passien"),
            "nama_dokter"=>request("nama_dokter"),
            "obat_resep"=>request("obat_resep"),
            "jumlah_obatresep"=>request("jumlah_obatresep")
        ]);
        
    }

    public function updateResep(Resep $resep){
        request()->validate([ 
            "nama_passien"=>"required",
            "nama_dokter"=>"required",
            "obat_resep"=>"required"
        ]);
    
        $succses = $resep->update([
            "nama_passien"=>request("nama_passien"),
            "nama_dokter"=>request("nama_dokter"),
            "obat_resep"=>request("obat_resep")
        ]);

        return[
            "succses" => $succses,
            "setatus" => 200
        ]; 
    }


    public function deleteResep(Resep $resep){ 
        $succses = $resep ->delete();

        return[
            "succses" => $succses,
            "setatus" => 200
        ]; 
    }
}


