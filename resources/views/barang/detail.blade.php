@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/barang/update/'.$barang['id_barang']); ?>">
    <div>
            <label>Barang</label>
            <select>
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value='<?php echo $b['id_barang']; ?>'><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Type Barang</label>
            <textarea><?php echo $barang['tipe_barang']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Serial Number</label>
            <textarea><?php echo $barang['serial_number']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>No Nota</label>
            <textarea><?php echo $barang['no_nota']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Ket Klaim Garansi</label>
            <textarea><?php echo $barang['ket_klaim_garansi']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection