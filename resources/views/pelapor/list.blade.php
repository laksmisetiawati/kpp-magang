@extends('layouts.app')

@section('content')

    <form>
        <div>
            <label>Pelapor</label>
            <select>
                <option value='1'>Pelapor 1</option>
                <option value='2'>Pelapor 2</option>
                <option value='3'>Pelapor 3</option>
            </select>
        </div>
        <div>
            <label>Nama Pelapor</label>
            <input type="text" />
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
    </form>

@endsection
