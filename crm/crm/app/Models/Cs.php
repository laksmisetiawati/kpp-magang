<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cs extends Model
{
    use HasFactory;

    protected $table = "cs"; //nama table database

    protected $primaryKey = "id_cs"; //flied yang digunakan sebagai primary key
    
    //field lainnya. isinya menyesuaikan dengan design database yang sebelumnya sudah dibuat
    protected $fillable = [
        'nama_cs',
        'no_telp',
        'alamat',
        'email'
    ];
}