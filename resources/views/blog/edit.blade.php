@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('home') }}" class="btn btn-info btn-sm" style="margin-bottom: 10px;">&larr;
        Kembali</a>

    <div class="card">
        <h3 class="card-header">Edit Data</h3>
        <div class="card-body">
            <form action="{{ route('update', $blog-> id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $blog->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="title">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomortelp" name="nomortelp"
                        value="{{ $blog->nomortelp }}" required>
                </div>
                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $blog->email }}" required>
                </div>
                <div class="form-group">
                    <label for="title">Alamat</label>
                    <textarea name="Alamat" id="Alamat" cols="30" rows="10"
                        class="form-control">{{ $blog->Alamat }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
        </div>
        </form>
    </div>
    @endsection