<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model-model. silahkan disesuaikan dengan kebutuhan masing-masing controller
//misalnya controller pelapor hanya butuh model pelapor saja, maka yang dipanggil hanya model pelapor saja
use App\Models\Barang;

class BarangController extends Controller
{
    public function index() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'barang' => Barang::get() //mengambil data Keluhan dari model keluhan
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('barang.list', $datas);
    }
    
    public function create() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'barang' => Barang::get(), //mengambil data Barang dari model Barang. model Barang harus dibuat terlebih dahulu
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('barang.create', $datas);
    }
    
    public function save(Request $request) {
        $insert = new Barang(); //memanggil Class Keluhan dari model Keluhan
        //field-field yang akan diinput. field yang ditulis harus sama persis dengan yang ada di model
        $insert->id_barang = $request->input('barang');
        $insert->nama_barang = $request->input('nama_barang');
        $insert->tipe_barang = $request->input('tipe_barang');
        $insert->serial_number = $request->input('serial_number');
        $insert->no_nota = $request->input('no_nota');
        $insert->ket_klaim_garansi = $request->input('ket_klaim_garansi');
        $insert->save();

        return redirect('/barang/')->with([
            'success-message' => 'Success add.'
        ]);
    }
    
    public function detail($id) {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'barang' => Barang::where('id', $id)->first(), //mengambil 1 data Keluhan dari model keluhan, jika id keluhan adalah $id
            'barang' => Barang::get(), //mengambil data Barang dari model Barang. model Barang harus dibuat terlebih dahulu
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('barang.detail', $datas);
    }
    
    public function update($id, Request $request) {
        Barang::where('id', $id)->update(
            array(
                'id_barang' => $request->input('barang'),
                'nama_barang' => $request->input('nama_barang'),
                'tipe_barang' => $request->input('tipe_barang'),
                'serial_number' => $request->input('serial_number'),
                'no_nota' => $request->input('no_nota'),
                'ket_klaim_garansi' => $request->input('ket_klaim_garansi')
            )
        );

        return redirect('/barang/')->with([
            'success-message' => 'Success update.'
        ]);
    }
}