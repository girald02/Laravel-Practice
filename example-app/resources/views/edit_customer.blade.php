{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITLE --}}
@section('title')
	Single Customer Data
@endsection

{{-- CONTENT --}}
@section('content')
	{{-- <a href="/customer" class="btn btn-info">BACK</a> --}}
	<br>
	<h1 class="center">View</h1>
	<form action="/customer/{{$customer->id}}" method="POST">
		@csrf
		@method('PUT')
		<label>NAME:</label>
		<input type="text" name="txtName" value="{{$customer->name}}"><br>
		<label>EMAIL:</label>
		<input type="text" name="txtEmail" value="{{$customer->email}}"><br>
		<label>PHONE:</label>
		<input type="text" name="txtPhone" value="{{$customer->phone}}"><br>
		<label>ADDRESS:</label>
		<input type="text" name="txtAddress" value="{{$customer->address}}"><br>
		<label>COUNTRY:</label>
		<input type="text" name="txtCountry" value="{{$customer->country}}"><br>
		<label>RATING</label>
		<input type="text" name="txtRating" value="{{$customer->rating}}"><br>
		<br>
		<input type="submit" class="btn btn-success" name="UPDATE">
	</form>
	<a href="/customer/{{$customer->id}}"><button class="btn btn-danger"><i class="fa fa-pencil-square-o" aria-hidden="true"> CANCEL</i></button></a>
@endsection


