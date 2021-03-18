@extends('layouts.app')

@section('content')

    <form>
        <div>
            <label>Barang</label>
            <select>
                <option value='1'>Barang 1</option>
                <option value='2'>Barang 2</option>
                <option value='3'>Barang 3</option>
            </select>
        </div>
        <div>
            <label>Nama Barang</label>
            <input type="text" />
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
    </form>

@endsection
