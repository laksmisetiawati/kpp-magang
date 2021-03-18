@extends('layouts.app')

@section('content')

    <form>
        <div>
            <label>Customer Services</label>
            <select>
                <option value='1'>CS 1</option>
                <option value='2'>CS 2</option>
                <option value='3'>CS 3</option>
            </select>
        </div>
        <div>
            <label>Nama Customer Service</label>
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
            <label>No telpon</label>
            <textarea></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

@endsection
