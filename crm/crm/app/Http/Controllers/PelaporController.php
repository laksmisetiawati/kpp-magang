<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model-model. silahkan disesuaikan dengan kebutuhan masing-masing controller
//misalnya controller pelapor hanya butuh model pelapor saja, maka yang dipanggil hanya model pelapor saja
use App\Models\Pelapor;

class PelaporController extends Controller
{
    public function index() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'pelapor' => Pelapor::get() //mengambil data Keluhan dari model keluhan
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('pelapor.list', $datas);
    }
    
    public function create() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('pelapor.create', $datas);
    }
    
    public function save(Request $request) {
        $insert = new Pelapor(); //memanggil Class Keluhan dari model Keluhan
        //field-field yang akan diinput. field yang ditulis harus sama persis dengan yang ada di model
        $insert->id_pelapor = $request->input('pelapor');
        $insert->nama_pelapor = $request->input('nama_pelapor');
        $insert->no_telp = $request->input('no_telp');
        $insert->alamat = $request->input('alamat');
        $insert->email = $request->input('email');
        $insert->save();

        return redirect('/pelapor/')->with([
            'success-message' => 'Success add.'
        ]);
    }
    
    public function detail($id) {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'pelapor' => Pelapor::where('id_pelapor', $id)->first(), //mengambil 1 data Keluhan dari model keluhan, jika id keluhan adalah $id
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('pelapor.detail', $datas);
    }
    
    public function update($id, Request $request) {
        Pelapor::where('id_pelapor', $id)->update(
            array(
                'nama_pelapor' => $request->input('nama_pelapor'),
                'no_telp' => $request->input('no_telp'),
                'alamat' => $request->input('alamat'),
                'email' => $request->input('email')
            )
        );

        return redirect('/pelapor/')->with([
            'success-message' => 'Success update.'
        ]);
    }
}