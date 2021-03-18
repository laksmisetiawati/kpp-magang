<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = "keluhan"; //nama table database

    protected $primaryKey = "id_transaksi"; //flied yang digunakan sebagai primary key
    
    //field lainnya. isinya menyesuaikan dengan design database yang sebelumnya sudah dibuat
    protected $fillable = [
        'id_barang',
        'id_pelapor',
        'id_cs',
        'tanggal',
        'keterangan_kerusakan',
        'jenis_kerusakan',
        'status'
    ];
}
