@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/pelapor/update/'.$pelapor['id_pelapor']); ?>">
        <div>
            <label>Pelapor</label>
            <select>
                <?php foreach($pelapor as $p) { //meng-loop data cs ?>
                    <option value='<?php echo $p['id_pelapor']; ?>'><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>No Telp</label>
            <textarea><?php echo $pelapor['no_telp']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Email</label>
            <textarea><?php echo $pelapor['email']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <label>Alamat</label>
            <textarea><?php echo $pelapor['alamat']; ?></textarea> <!-- menampilkan data dari database -->
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection