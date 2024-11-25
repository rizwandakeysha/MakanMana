@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Restoran</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $restoran->nama_restoran }}</h5>
            <p class="card-text">Alamat: {{ $restoran->alamat }}</p>
        </div>
    </div>
    <a href="{{ route('restoran.index') }}" class="btn btn-primary mt-3">Kembali</a>
</div>
@endsection