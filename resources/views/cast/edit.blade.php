@extends('layout.master')

@section('judul')
	Halaman Edit Cast {{$cast->nama}}
@endsection

@section('judul2')
	Edit Cast {{$cast->nama}}
@endsection

@section('content')
	<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="{{$cast->nama}}">
  </div>
      @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  <div class="form-group">
    <label>Umur</label>
    <input type="text" class="form-control" name="umur" value="{{$cast->umur}}">
  </div>
      @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  <div class="form-group">
    <label>Bio</label>
    <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->nama}}</textarea>
  </div>
      @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
