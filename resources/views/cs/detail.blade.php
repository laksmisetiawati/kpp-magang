@extends('layouts.app')

@section('content')

<form method="POST" action="<?php echo url('/cs/update/'.$cs['id_cs']); ?>">
    <div>
        <label>Nama Customer Services</label>
        <textarea><?php echo $cs['nama_cs']; ?></textarea> <!-- menampilkan data dari database -->
    </div>
    <div>
        <label>No Telp</label>
        <textarea><?php echo $cs['no_telp']; ?></textarea> <!-- menampilkan data dari database -->
    </div>
    <div>
        <label>Alamat</label>
        <textarea><?php echo $cs['alamat']; ?></textarea> <!-- menampilkan data dari database -->
    </div>
    <div>
        <label>Email</label>
        <textarea><?php echo $cs['email']; ?></textarea> <!-- menampilkan data dari database -->
    </div>
    <div>
        <button type="save">Save</button>
    </div>
    @csrf
</form>

@endsection