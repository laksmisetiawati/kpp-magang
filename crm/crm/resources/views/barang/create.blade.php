@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/barang/save'); ?>">
    <div class="card-header">
        <h3 class="card-title">Barang</h3>
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
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
	        <label>Nama Barang
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter Nama Barang" name="nama_barang">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
	        <label>Tipe Barang
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter Tipe Barang" name="tipe_barang">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
	        <label>Serial Number
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter Serial Number" name="serial_number">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
	        <label>No Nota
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter No Nota" name="no_nota">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
	        <label>Ket Klaim Garansi<
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter Keterangan Klaim Garansi" name="ket_klaim_garansi">
	        <span class="form-text text-muted"></span>
        </div>
        <div>
		<button type="save" class="btn btn-primary mr-2">Save</button>
		</div>
        @csrf
    </form>

@endsection