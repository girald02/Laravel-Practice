{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITTLE OF PAGE --}}
@section('title')
	ADD ARTICLES
@endsection

{{-- PAGE CONTENT --}}
@section('content')

	<h1 class="center">Add Article</h1>

	<form action="/blog" method="POST">
		@csrf
			<div class="form-group">
				<label for="title">Title:</label>
				<input autofocus type="text" name="txtTitle" class="form-control" id="title" >
			</div>
			<div class="form-group">
				<label for="content">Content:</label>
				<textarea name="txtContent"  class="form-control"></textarea>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="/blog" class="btn btn-danger">Cancel</a>
	</form>

@endsection
