@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('create') }}" class="btn btn-info" style="border-radius: 5%; margin-bottom:20px;">Tambah data</a>

    <div class="card">
        <h3 class="card-header">Views</h3>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blog as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->nomortelp }}</td>
                        <td>{{ $b->email }}</td>
                        <td>{{ $b->Alamat }}</td>
                        <td>
                            <a href="{{ route('destroy', $b->id) }}" class="badge  badge-danger"
                                style="border-radius: 5%;" onclick="return confirm('Delete this data?') ">Delete</a>
                        </td>
                        <td>
                            <a href="{{ route('edit', $b->id) }}" class="badge badge-info">Edit Data</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection