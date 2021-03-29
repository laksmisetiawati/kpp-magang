@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/pelapor/update/'.$pelapor['id_pelapor']); ?>">
    <div>
            <label>Nama Pelapor</label>
            <textarea><?php echo $pelapor['nama_pelapor']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>No Telp</label>
            <textarea><?php echo $pelapor['no_telp']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Alamat</label>
            <textarea><?php echo $pelapor['alamat']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Email</label>
            <textarea><?php echo $pelapor['email']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="save">Save</button>
        </div>
        @csrf
    </form>

@endsection