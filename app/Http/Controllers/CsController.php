<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model-model. silahkan disesuaikan dengan kebutuhan masing-masing controller
//misalnya controller pelapor hanya butuh model pelapor saja, maka yang dipanggil hanya model pelapor saja
use App\Models\Cs;

class CsController extends Controller
{
    public function index() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'cs' => Cs::get() //mengambil data Keluhan dari model keluhan
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('cs.list', $datas);
    }
    
    public function create() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('cs.create', $datas);
    }
    
    public function save(Request $request) {
        $insert = new Cs(); //memanggil Class Keluhan dari model Keluhan
        //field-field yang akan diinput. field yang ditulis harus sama persis dengan yang ada di model
        $insert->nama_cs = $request->input('nama_cs');
        $insert->no_telp = $request->input('no_telp');
        $insert->alamat = $request->input('alamat');
        $insert->email = $request->input('email');
        $insert->save();

        return redirect('/cs/')->with([
            'success-message' => 'Success add.'
        ]);
    }
    
    public function detail($id) {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'cs' => Cs::where('id_cs', $id)->first(), //mengambil 1 data Keluhan dari model keluhan, jika id keluhan adalah $id
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('cs.detail', $datas);
    }
    
    public function update($id, Request $request) {
        Cs::where('id_cs', $id)->update(
            array(
                'nama_cs' => $request->input('nama_cs'),
                'no_telp' => $request->input('no_telp'),
                'alamat' => $request->input('alamat'),
                'email' => $request->input('email')
            )
        );

        return redirect('/cs/')->with([
            'success-message' => 'Success update.'
        ]);
    }
}