@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/barang/save'); ?>">
        <div>
            <label>Nama Barang</label>
            <input name="nama_barang"/>
        </div>
        <div>
            <label>Tipe Barang</label>
            <textarea name="tipe_barang"></textarea>
        </div>
        <div>
            <label>Serial Number</label>
            <textarea name="serial_number"></textarea>
        </div>
        <div>
            <label>No Nota</label>
            <textarea name="no_nota"></textarea>
        </div>
        <div>
            <label>Ket Klaim Garansi</label>
            <textarea name="ket_klaim_garansi"></textarea>
        </div>
        <div>
            <button type="save">Save</button>
        </div>
        @csrf
    </form>

@endsection