@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/cs/update/'.$cs['id_cs']); ?>">
    <div>
            <label>Customer Service</label>
            <select>
                <?php foreach($cs as $c) { //meng-loop data cs ?>
                    <option value='<?php echo $c['id_cs']; ?>'><?php echo $cs['nama_cs']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Email</label>
            <textarea><?php echo $cs['email']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Alamat</label>
            <textarea><?php echo $cs['alamat']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>No Telp</label>
            <textarea><?php echo $cs['no_telp']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection