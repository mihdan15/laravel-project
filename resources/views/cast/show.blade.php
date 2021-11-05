@extends('layout.master')

@section('judul')
	Halaman Detail Cast {{$cast->nama}}
@endsection

@section('judul2')
	Detail Cast {{$cast->nama}}
@endsection

@section('content')
	<h2>{{$cast->nama}}</h2>
	<p>Umur : {{$cast->umur}}</p>
	<p>Bio : {{$cast->bio}}</p>
@endsection