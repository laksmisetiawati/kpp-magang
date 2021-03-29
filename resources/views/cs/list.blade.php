@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th><label>Nama Customer Services</label>
            <th><label>No Telp</label>
            <th><label>Alamat</label>
            <th><label>Email</label>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cs as $c) { ?>
            <tr>
                <th><?php echo $c['nama_cs']; ?></th>
                <th><?php echo $c['no_telp']; ?></th>
                <th><?php echo $c['alamat']; ?></th>
                <th><?php echo $c['email']; ?></th>
                <th>
                    <a href="<?php echo url('/cs/detail/'.$c['id_cs']); ?>">Edit</a>
                    <a href="<?php echo url('/cs/detail/'.$c['id_cs']); ?>">Delete</a>
                </th>
            </tr>
        <?php } ?> 
    </tbody>
</table>

<a href="<?php echo url('/cs/create'); ?>">Tambah Data Customer Service</a>

@endsection