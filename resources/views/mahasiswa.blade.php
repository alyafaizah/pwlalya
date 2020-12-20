@extends('master');
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@section('tittle','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        
                        <th scope="col"></th>
                    </tr>
            </thead>
            <tbody>
                @foreach( $mahasiswa as $mhs )
                <tr>
                    <th scope="row">1</th> 
                    <td>{{ $mhs->id }}</td>
                    <td>{{ $mhs->nama }}</td> 
                    <td>
                        <a href="/blog/mahasiswa/{{$mhs->id}}" class="badge badge-info">detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
