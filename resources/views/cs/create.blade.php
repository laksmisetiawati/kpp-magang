@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/cs/save'); ?>">
        <div>
            <label>Nama CS</label>
            <input name="nama_cs"/>
        </div>
        <div>
            <label>No telp</label>
            <textarea name="no_telp"></textarea>
        </div>
        <div>
            <label>Alamat</label>
            <textarea name="alamat"></textarea>
        </div>
        <div>
            <label>Email</label>
            <textarea name="email"></textarea>
        </div>
        <div>
            <button type="save">Save</button>
        </div>
        @csrf
    </form>

@endsection