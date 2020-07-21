@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('home') }}" class="btn btn-info btn-sm" style="margin-bottom: 10px; border-radius: 5%;">&larr;
        Kembali</a>

    <div class="card">
        <h3 class="card-header">Add Data</h3>
        <div class="card-body">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nomortelp">Nomor telepon</label>
                        <input type="text" class="form-control" id="nomortelp" name="nomortelp" required>
                    </div>
                    <div class="form-group">
                        <label for="nomortelp">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="nomortelp">Alamat</label>
                        <textarea name="Alamat" id="Alamat" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection