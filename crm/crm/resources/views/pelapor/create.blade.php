@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/pelapor/save'); ?>">
    <div class="card-header">
        <h3 class="card-title">Pelapor</h3>
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
	        <label>Nama Pelapor
            <span class="text-danger">*</span></label>
	        <input type="text" class="form-control" placeholder="Enter Nama Pelapor" name="nama_pelapor">
	        <span class="form-text text-muted">Please enter your name.</span>
        </div>     
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
            <label>No telp
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter No.Telpon" name="no_telp">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
            <label>Alamat
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Alamat" name="alamat">
	        <span class="form-text text-muted"></span>
        </div>
        <div class="card card-custom gutter-b example example-compact"></div>
        <div class="form-group">
            <label>Email
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email">
	        <span class="form-text text-muted"></span>
        </div>
        <div>
		<button type="save" class="btn btn-primary mr-2">Save</button>
		</div>
        @csrf
    </form>

@endsection
