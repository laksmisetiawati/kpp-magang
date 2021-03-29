@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/keluhan/save'); ?>">
        <div>
            <label>Customer Service</label>
            <select name="id_cs">
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value='<?php echo $c['id_cs']; ?>'><?php echo $c['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Pelapor</label>
            <select name="id_pelapor">
                <?php foreach($pelapor as $p) { //meng-loop data pelapor ?>
                    <option value='<?php echo $p['id_pelapor']; ?>'><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Barang</label>
            <select name="id_barang">
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value='<?php echo $b['id_barang']; ?>'><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Tanggal</label>
            <input name="tanggal" placeholder="Format tanggal YYYY-MM-DD" />
        </div>
        <div>
            <label>Keterangan Kerusakan</label>
            <textarea name="keterangan_kerusakan"></textarea>
        </div>
        <div>
            <label>Jenis Kerusakan</label>
            <textarea name="jenis_kerusakan"></textarea>
        </div>
        <div>
            <label>Status</label>
            <input name="status" />
        </div>
        <div>
            <button type="save">Save</button>
        </div>
        @csrf 
    </form>

@endsection