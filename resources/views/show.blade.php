@extends('master');
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@section('tittle','Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="mt-3">Detail Mahasiswa</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                    <p class="card-text">{{ $student->kelas }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>
                </div>
</div>

        </div>
    </div>
</div>
@endsection
