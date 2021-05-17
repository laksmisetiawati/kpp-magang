@extends('main')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard > Customer Services</h1>
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
                <h3 class="card-title">Customer Services</h3>
        </div>
    </div>

    <div clas="card-body table-responsive">
    <table class="table table-bordered">
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
                
                    <a class="btn btn-primary" href="<?php echo url('/cs/detail/'.$c['id_cs']); ?>">Edit</a>
                    &nbsp;
                    <a class="btn btn-danger" href="<?php echo url('/cs/detail/'.$c['id_cs']); ?>">Delete</a>
                    
                </th>
            </tr>
        <?php } ?> 
    </tbody>
</table>

<a class="btn btn-primary" href="<?php echo url('/cs/create');?>"class="button">Tambah Data Customer Services</a>
@endsection