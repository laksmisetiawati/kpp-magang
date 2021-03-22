@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Type Barang</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($barang as $b) { ?>
            <tr>
                <th><?php echo $b['nama_barang']; ?></th>
                <th><?php echo $b['tipe_barang']; ?></th>
                <th>
                    <a href="<?php echo url('/barang/detail/'.$barang['id_barang']); ?>">Edit</a>
                    <a>Delete</a>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

@endsection