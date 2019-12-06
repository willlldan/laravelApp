@extends('layout/main')
@section('title', 'Tambah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card">
                <h5 class="card-title">{{$students->nama}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$students->nrp}}</h6>
                <p class="card-text">{{$students->email}}</p>
                <p class="card-text">{{$students->jurusan}}</p>
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/students" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection