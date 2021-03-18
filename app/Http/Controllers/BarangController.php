<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        //echo 'halaman barang';
        return view('barang.list');
    }
}
