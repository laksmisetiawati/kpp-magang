<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model-model. silahkan disesuaikan dengan kebutuhan masing-masing controller
//misalnya controller pelapor hanya butuh model pelapor saja, maka yang dipanggil hanya model pelapor saja
use App\Models\Keluhan;
use App\Models\Barang;
use App\Models\Pelapor;
use App\Models\Cs;

class KeluhanController extends Controller
{
    public function index() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'keluhan' => Keluhan::get() //mengambil data Keluhan dari model keluhan
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('keluhan.list', $datas);
    }
    
    public function create() {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'barang' => Barang::get(), //mengambil data Barang dari model Barang. model Barang harus dibuat terlebih dahulu
            'pelapor' => Pelapor::get(), //mengambil data Pelapor dari model Pelapor. model Pelapor harus dibuat terlebih dahulu
            'cs' => Cs::get(), //mengambil data Cs dari model Cs. model Cs harus dibuat terlebih dahulu
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('keluhan.create', $datas);
    }
    
    public function save(Request $request) {
        $insert = new Keluhan(); //memanggil Class Keluhan dari model Keluhan
        //field-field yang akan diinput. field yang ditulis harus sama persis dengan yang ada di model
        $insert->id_barang = $request->input('barang');
        $insert->id_pelapor = $request->input('pelapor');
        $insert->id_cs = $request->input('cs');
        $insert->tanggal = $request->input('tanggal');
        $insert->keterangan_kerusakan = $request->input('keterangan_kerusakan');
        $insert->jenis_kerusakan = $request->input('jenis_kerusakan');
        $insert->status = $request->input('status');
        $insert->save();

        return redirect('/keluhan/')->with([
            'success-message' => 'Success add.'
        ]);
    }
    
    public function detail($id) {
        $datas = [
            'css' => [],
            'js' => [],

            //list data-data. silahkan disesuaikan dengan data-data yang dibutuhkan pada setiap halaman saja
            //jika tidak dibutuhkan bisa dihapus saja
            'keluhan' => Keluhan::where('id', $id)->first(), //mengambil 1 data Keluhan dari model keluhan, jika id keluhan adalah $id
            'barang' => Barang::get(), //mengambil data Barang dari model Barang. model Barang harus dibuat terlebih dahulu
            'pelapor' => Pelapor::get(), //mengambil data Pelapor dari model Pelapor. model Pelapor harus dibuat terlebih dahulu
            'cs' => Cs::get(), //mengambil data Cs dari model Cs. model Cs harus dibuat terlebih dahulu
        ];

        // $datas digunakan untuk mengirimkan data-data dari database ataupun data statis ke view
        return view('keluhan.detail', $datas);
    }
    
    public function update($id, Request $request) {
        Keluhan::where('id', $id)->update(
            array(
                'id_barang' => $request->input('barang'),
                'id_pelapor' => $request->input('pelapor'),
                'id_cs' => $request->input('cs'),
                'tanggal' => $request->input('tanggal'),
                'keterangan_kerusakan' => $request->input('keterangan_kerusakan'),
                'status' => $request->input('status')
            )
        );

        return redirect('/keluhan/')->with([
            'success-message' => 'Success update.'
        ]);
    }
}