@extends('layout.master')

@section('judul')
	Halaman Welcome
@endsection

@section('judul2')
	welcome
@endsection

@section('content')
    <h1>SELAMAT DATANG!! {{$firstname}} {{$lastname}}</h1>
    <h3>Terima Kasih telah bergabung di Website kami. Media Belajar kita bersama</h3>
@endsection