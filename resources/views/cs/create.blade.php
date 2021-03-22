@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/cs/save'); ?>">
        <div>
            <label>Customer Service</label>
            <select>
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value='<?php echo $c['id_cs']; ?>'><?php echo $c['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Email</label>
            <textarea name="email"></textarea>
        </div>
        <div>
            <label>Alamat</label>
            <textarea name="alamat"></textarea>
        </div>
        <div>
            <label>No telpon</label>
            <textarea name="no_telp"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection