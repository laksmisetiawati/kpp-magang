@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th><label>Tanggal</label>
            <th><label>Keterangan Kerusakan</label>
            <th><label>Jenis Kerusakan</label>
            <th><label>Status</label>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($keluhan as $k) { ?>
            <tr>
                <th><?php echo $k['tanggal']; ?></th>
                <th><?php echo $k['keterangan_kerusakan']; ?></th>
                <th><?php echo $k['jenis_kerusakan']; ?></th>
                <th><?php echo $k['status']; ?></th>
                <th>
                    <a href="<?php echo url('/keluhan/detail/'.$k['id_keluhan']); ?>">Edit</a>
                    <a href="<?php echo url('/keluhan/detail/'.$k['id_keluhan']); ?>">Delete</a>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

@endsection