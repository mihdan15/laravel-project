@extends('layout.master')

@section('judul')
	Halaman Register
@endsection

@section('judul2')
	Buat Account Baru
@endsection

@section('content')
	<h3>Sign Up Form</h3>
<form action="/welcome" method="post">
	@csrf
	<label for="first" >First Name:</label>
	<br><br>
	<input type="text" id="first" name="firstname">
	<br><br>
	<label for="last" >Last Name:</label>
	<br><br>
	<input type="text" id="last" name="lastname">
	<br><br>
	<label>Gender:</label><br><br>
	<input type="radio" id="male" name="gender" value="male">Male</input>
	<br>
	<input type="radio" id="female" name="gender" value="female">Female</input>
	<br>
	<input type="radio" id="other" name="gender" value="other">Other</input>
	<br><br>
	<label>Nationallity:</label>
	<br><br>
	<select name="nationallity">
		<option value="indonesia">Indonesia</option>
		<option value="amerika">Amerika</option>
		<option value="inggris">Inggris</option>
	</select>
	<br><br>
	<label>Languange Spoken:</label>
	<br><br>
	<input type="checkbox" name="languange" value="indonesia">Indonesia
	<br>
	<input type="checkbox" name="languange" value="english">English
	<br>
	<input type="checkbox" name="languange" value="other">Other
	<br><br>
	<label>Bio:</label>
	<br><br>
	<textarea name="bio" cols="30" rows="10"></textarea>
	<br>
	<input type="submit" value="Sign Up">
</form>
@endsection