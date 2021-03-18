<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporController extends Controller
{
    public function index() {
        //echo 'halaman pelapor';
        return view('pelapor.list');
    }
}
