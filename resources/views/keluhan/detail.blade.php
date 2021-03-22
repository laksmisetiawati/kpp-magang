@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/keluhan/update/'.$keluhan['id_keluhan']); ?>">
        <div>
            <label>Customer Service</label>
            <select>
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value="<?php echo $c['id_cs']; ?>" <?php if($c['id_cs'] == $keluhan['id_cs']) { echo 'selected'; } ?>><?php echo $c['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Pelapor</label>
            <select>
                <?php foreach($pelapor as $p) { //meng-loop data cs ?>
                    <option value="<?php echo $p['id_pelapor']; ?>" <?php if($b['id_pelapor'] == $keluhan['id_pelapor']) { echo 'selected'; } ?>><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Barang</label>
            <select>
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value="<?php echo $b['id_barang']; ?>" <?php if($b['id_barang'] == $keluhan['id_barang']) { echo 'selected'; } ?>><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Tanggal</label>
            <input type="text" value="<?php echo $keluhan['tanggal']; ?>" /> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Keterangan Kerusakan</label>
            <textarea><?php echo $keluhan['keterangan_kerusakan']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Jenis Kerusakan</label>
            <textarea><?php echo $keluhan['jenis_kerusakan']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Status</label>
            <textarea><?php echo $keluhan['status']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection