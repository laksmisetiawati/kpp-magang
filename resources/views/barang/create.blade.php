@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/barang/save'); ?>">
        <div>
            <label>Barang</label>
            <select>
                <?php foreach($barang as $b) { //meng-loop data barang ?>
                    <option value='<?php echo $b['id_barang']; ?>'><?php echo $b['nama_barang']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Type Barang</label>
            <input type="text" />
        </div>
        <div>
            <label>No Nota</label>
            <textarea></textarea>
        </div>
        <div>
            <label>Ket Klaim Garansi</label>
            <textarea></textarea>
        </div>
        <div>
            <label>Serial Number</label>
            <textarea></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection