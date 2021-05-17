@extends('main')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard > Barang</h1>
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
                <h3 class="card-title">Barang</h3>
        </div>
    </div>

    <div clas="card-body table-responsive">
    <table class="table table-bordered">
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
                   
                    <a class="btn btn-primary" href="<?php echo url('/barang/detail/'.$b['id_barang']); ?>"class="button">Edit</a>
                    &nbsp;
                    <a class="btn btn-danger"href="<?php echo url('/barang/detail/'.$b['id_barang']); ?>"class="button">Delete</a>
                
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a class="btn btn-primary" href="<?php echo url('/barang/create');?>"class="button">Tambah Data Barang</a>
@endsection