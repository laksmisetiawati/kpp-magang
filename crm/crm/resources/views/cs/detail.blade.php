@extends('layouts.app')

@section('content')

<form method="POST" action="<?php echo url('/cs/update/'.$cs['id_cs']); ?>">
        <div>
            <label>Nama Customer Services</label>
            <textarea name="nama_cs"><?php echo $cs['nama_cs']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>No Telp</label>
            <textarea name="no_telp"><?php echo $cs['no_telp']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Alamat</label>
            <textarea name="alamat"><?php echo $cs['alamat']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Email</label>
            <textarea name="email"><?php echo $cs['email']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="save" class="btn btn-primary mr-2">Save</button>
        </div>
        @csrf
    </form>

@endsection