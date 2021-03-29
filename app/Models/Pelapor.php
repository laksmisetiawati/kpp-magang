<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    use HasFactory;

    protected $table = "pelapor"; //nama table database

    protected $primaryKey = "id_pelapor"; //field yang digunakan sebagai primary key
    
    //field lainnya. isinya menyesuaikan dengan design database yang sebelumnya sudah dibuat
    protected $fillable = [
        'nama_pelapor',
        'no_telp',
        'alamat',
        'email',
    ];
}