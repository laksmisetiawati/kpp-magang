@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/keluhan/update/'.$keluhan['id_transaksi']); ?>">
        <div>
            <label>Customer Service</label>
            <select name="id_cs">
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value="<?php echo $c['id_cs']; ?>" <?php if($c['id_cs'] == $keluhan['id_cs']) { echo 'selected'; } ?>><?php echo $c['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Pelapor</label>
            <select name="id_pelapor">
                <?php foreach($pelapor as $p) { //meng-loop data cs ?>
                    <option value="<?php echo $p['id_pelapor']; ?>" <?php if($p['id_pelapor'] == $keluhan['id_pelapor']) { echo 'selected'; } ?>><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Barang</label>
            <select name="id_barang">
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value="<?php echo $b['id_barang']; ?>" <?php if($b['id_barang'] == $keluhan['id_barang']) { echo 'selected'; } ?>><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Tanggal</label>
            <textarea name="tanggal"><?php echo $keluhan['tanggal']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Keterangan Kerusakan</label>
            <textarea name="keterangan_kerusakan"><?php echo $keluhan['keterangan_kerusakan']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Jenis Kerusakan</label>
            <textarea name="jenis_kerusakan"><?php echo $keluhan['jenis_kerusakan']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Status</label>
            <textarea name="status"><?php echo $keluhan['status']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="save" class="btn btn-primary mr-2">Save</button>
        </div>
        @csrf
    </form>

@endsection