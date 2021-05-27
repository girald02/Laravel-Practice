{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITLE --}}
@section('title')
Single Customer Data
@endsection

{{-- CONTENT --}}
@section('content')

{{-- SUCCESS UPDATE --}}
@if(session()->has('message'))
<div class="alert alert-success">
	{{ session()->get('message') }}
</div>
@endif

{{-- ERROR INSERT --}}
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{{-- <a href="/customer" class="btn btn-info">BACK</a> --}}
<h1 class="center">Create</h1>
<form action="/customer" method="POST">
	@csrf
	<div class="form-group">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<label for="txtName">Name:</label>
					<input type="text" value="{{ old('name') }}" required="" class="form-control" id="txtName" name="name" placeholder="Enter name">
				</div>
				<div class="col-md-6">
					<label for="txtEmail">Email:</label>
					<input type="email" class="form-control" value="{{ old('email') }}" id="txtEmail" name="email" placeholder="Enter email">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="txtPhone">Phone:</label>
					<input type="text" class="form-control" value="{{ old('phone') }}" id="txtPhone" name="phone" placeholder="Enter phone">
				</div>
				<div class="col-md-6">
					<label for="txtName">Address:</label>
					<input type="text" class="form-control" value="{{ old('address') }}"id="txtAddress" name="address" placeholder="Enter address">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="txtName">Country:</label>
					<input type="text" class="form-control" value="{{ old('country') }}" id="txtCountry" name="country" placeholder="Enter country">
				</div>
				<div class="col-md-6">
					<label for="txtName">Rating:</label>
					<input type="text" class="form-control" value="{{ old('rating') }}"  id="txtRating" name="rating" placeholder="Enter rating">
				</div>
			</div>
			<div class="form-group">
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<a class="btn btn-danger" href="/customer">CANCEL</a>
		</div>
	</div>
	<br><br>
	@endsection




