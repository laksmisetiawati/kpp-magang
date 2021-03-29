@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th><label>Nama Barang</label>
            <th><label>Tipe Barang</label>
            <th><label>Serial Number</label>
            <th><label>No Nota</label>
            <th><label>Ket Klaim Garansi</label>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($barang as $b) { ?>
            <tr>
                <th><?php echo $b['nama_barang']; ?></th>
                <th><?php echo $b['tipe_barang']; ?></th>
                <th><?php echo $b['serial_number']; ?></th>
                <th><?php echo $b['no_nota']; ?></th>
                <th><?php echo $b['ket_klaim_garansi']; ?></th>
                <th>
                    <a href="<?php echo url('/barang/detail/'.$b['id_barang']); ?>">Edit</a>
                    <a href="<?php echo url('/barang/detail/'.$b['id_barang']); ?>">Delete</a>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="<?php echo url('/barang/create'); ?>">Tambah Data Barang</a>

@endsection