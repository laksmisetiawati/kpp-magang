@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th><label>Nama Pelapor</label>
            <th><label>No Telp</label>
            <th><label>Alamat</label>
            <th><label>Email</label>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pelapor as $p) { ?>
            <tr>
                <th><?php echo $p['nama_pelapor']; ?></th>
                <th><?php echo $p['no_telp']; ?></th>
                <th><?php echo $p['alamat']; ?></th>
                <th><?php echo $p['email']; ?></th>
                <th>
                    <a href="<?php echo url('/pelapor/detail/'.$p['id_pelapor']); ?>">Edit</a>
                    <a href="<?php echo url('/pelapor/detail/'.$p['id_pelapor']); ?>">Delete</a>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

@endsection