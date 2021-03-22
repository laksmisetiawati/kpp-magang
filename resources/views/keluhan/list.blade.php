@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($keluhan as $k) { ?>
            <tr>
                <th><?php echo $k['tanggal']; ?></th>
                <th><?php echo $k['status']; ?></th>
                <th>
                    <a href="<?php echo url('/keluhan/detail/'.$keluhan['id_keluhan']); ?>">Edit</a>
                    <a>Delete</a>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

@endsection