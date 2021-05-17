@extends('main')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard > Keluhan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">
 
        <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                <h3 class="card-title">Keluhan</h3>
        </div>
    </div>

    <div clas="card-body table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><label>Tanggal</label>
            <th> <label>Keterangan Kerusakan</label>
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
                    
                    <a class="btn btn-primary" href="<?php echo url('/keluhan/detail/'.$k['id_transaksi']); ?>">Edit</a>
                    &nbsp;
                    <a class="btn btn-danger" href="<?php echo url('/keluhan/detail/'.$k['id_transaksi']); ?>">Delete</a>    
            
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a class="btn btn-primary" href="<?php echo url('/keluhan/create');?>"class="button">Tambah Data Keluhan</a>
@endsection