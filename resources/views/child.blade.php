@extends('layout.app')
@section('title', 'Profil')

@section('sidebar')
@parent
<p>Sidebar halaman Profil.</p> 
@endsection

@section('content')
<p>Ini adalah bagian konten. NIM - Nama</p> 
@endsection

@extends('layouts.app')

// kode… 
@component("alert")
<b>Tulisan ini akan mengisi variabel $slot</b> 
@endcomponent

