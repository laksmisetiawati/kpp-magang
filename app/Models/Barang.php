<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang"; //nama table database

    protected $primaryKey = "id_barang"; //flied yang digunakan sebagai primary key
    
    //field lainnya. isinya menyesuaikan dengan design database yang sebelumnya sudah dibuat
    protected $fillable = [
        'nama_barang',
        'tipe_barang',
        'serial_number',
        'no_nota',
        'ket_klaim_garansi',
    ];
}