@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/barang/update/'.$barang['id_barang']); ?>">
        <div>
            <label>Nama Barang</label>
            <textarea name="nama_barang"><?php echo $barang['nama_barang']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Tipe Barang</label>
            <textarea name="tipe_barang"><?php echo $barang['tipe_barang']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Serial Number</label>
            <textarea name="serial_number"><?php echo $barang['serial_number']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>No Nota</label>
            <textarea name="no_nota"><?php echo $barang['no_nota']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Ket Klaim Garansi</label>
            <textarea name="ket_klaim_garansi"><?php echo $barang['ket_klaim_garansi']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="save" class="btn btn-primary mr-2">Save</button>
        </div>
        @csrf
    </form>

@endsection