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
	{{-- <a href="/customer" class="btn btn-info">BACK</a> --}}

	<br>

	<h1 class="center">View</h1>
	<form>
		<input type="text" disabled="" name="" value="{{$customer->id}}"><br>
		<input type="text" disabled="" name="" value="{{$customer->name}}"><br>
		<input type="text" disabled="" name="" value="{{$customer->email}}"><br>
		<input type="text" disabled="" name="" value="{{$customer->phone}}"><br>
		<input type="text" disabled="" name="" value="{{$customer->address}}"><br>
		<input type="text" disabled="" name="" value="{{$customer->country}}"><br>
		<input type="text" disabled="" name="" value="{{$customer->rating}}"><br>
	</form>

	<a href="{{$customer->id}}/edit"><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></button></a>

	<a href="/customer"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"> BACK</i></button></a>

@endsection