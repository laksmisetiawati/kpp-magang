@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/barang/update/'.$barang['id_barang']); ?>">
        <div>
            <label>Nama Barang</label>
            <textarea><?php echo $barang['nama_barang']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Tipe Barang</label>
            <textarea><?php echo $barang['tipe_barang']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Serial Number</label>
            <textarea><?php echo $barang['serial_number']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>No Nota</label>
            <textarea><?php echo $barang['no_nota']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Ket Klaim Garansi</label>
            <textarea><?php echo $barang['ket_klaim_garansi']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="save">Save</button>
        </div>
        @csrf
    </form>

@endsection