@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/keluhan/save'); ?>">
    <div class="card-header">
        <h3 class="card-title">Keluhan</h3>
        <div>
        We'll never share your data information with anyone else.
        </div>
        <div>
        <span class="text-danger">*Wajib</span></label>
        </div>
		<div class="card-toolbar">
		<div class="example-tools justify-content-center">
		<span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
		<span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
		</div>
		</div>
        </div>
        <div>
            <label>Customer Service</label>
            <select name="id_cs">
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value='<?php echo $c['id_cs']; ?>'><?php echo $c['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Pelapor</label>
            <select name="id_pelapor">
                <?php foreach($pelapor as $p) { //meng-loop data pelapor ?>
                    <option value='<?php echo $p['id_pelapor']; ?>'><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Barang</label>
            <select name="id_barang">
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value='<?php echo $b['id_barang']; ?>'><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
	        <label>Tanggal
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter Tanggal" name="tanggal">
	        <span class="form-text text-muted"></span>
        </div>    
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
            <label>Keterangan Kerusakan
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Keterangan Kerusakan" name="keterangan_kerusakan">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
            <label>Jenis Kerusakan
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Jenis Kerusakan" name="jenis_kerusakan">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
            <label>Status
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Status" name="status">
	        <span class="form-text text-muted"></span>
        </div>
        <div>
		    <button type="save" class="btn btn-primary mr-2">Save</button>
		</div>
        @csrf 
    </form>

@endsection