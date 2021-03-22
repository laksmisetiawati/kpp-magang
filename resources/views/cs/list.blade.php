@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>No Telp</th>
            <th>Email</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cs as $c) { ?>
            <tr>
                <th><?php echo $c['no_telp']; ?></th>
                <th><?php echo $c['email']; ?></th>
                <th>
                    <a href="<?php echo url('/cs/detail/'.$cs['id_cs']); ?>">Edit</a>
                    <a>Delete</a>
                </th>
            </tr>
        <?php } ?> 
    </tbody>
</table>

@endsection