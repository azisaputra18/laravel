<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ["no_transaksi","tgl_transaksi "," nama_transaksi"," nama_dtotal_bayarokter","obat_id"," resep_id"];
}
