<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServicesController extends Controller
{
    public function index() {
        //echo 'halaman customer_services';
        return view('customer_services.list');
    }

}