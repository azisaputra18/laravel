<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $fillable = ["no_resep","tgl_resep "," nama_passien"," nama_dokter","obat_resep "," jumlah_obatresep"];
}
