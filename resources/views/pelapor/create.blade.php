@extends('layouts.app')

@section('content')

    <form method="POST" action="<?php echo url('/pelapor/save'); ?>">
        <div>
            <label>Pelapor</label>
            <select>
                <?php foreach($pelapor as $p) { //meng-loop data cs ?>
                    <option value='<?php echo $p['id_pelapor']; ?>'><?php echo $p['nama_pelapor']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label>No telpon</label>
            <textarea></textarea>
        </div>
        <div>
            <label>Email</label>
            <textarea></textarea>
        </div>
        <div>
            <label>Alamat</label>
            <textarea></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @csrf
    </form>

@endsection