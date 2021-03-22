@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/keluhan/save'); ?>">
        <div>
            <label>Customer Service</label>
            <select>
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value='<?php echo $c['id_cs']; ?>'><?php echo $c['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Pelapor</label>
            <select>
                <?php foreach($pelapor as $p) { //meng-loop data cs ?>
                    <option value='<?php echo $p['id_pelapor']; ?>'><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Barang</label>
            <select>
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value='<?php echo $b['id_barang']; ?>'><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Tanggal</label>
            <input type="text" />
        </div>
        <div>
            <label>Keterangan Kerusakan</label>
            <textarea></textarea>
        </div>
        <div>
            <label>Jenis Kerusakan</label>
            <textarea></textarea>
        </div>
        <div>
            <label>Status</label>
            <textarea></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection