{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITTLE OF PAGE --}}
@section('title')
	Edit Article
@endsection

{{-- PAGE CONTENT --}}
@section('content')


	<a href="/blog" class="btn btn-info">BACK</a>

	<h1 class="center">EDIT ARTICLE</h1>

	<form action="/blog/{{$article->id}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="title">Title:</label>
			<input autofocus type="text" name="txtTitle" class="form-control" id="title" value="{{$article->title}}">
		</div>
		<div class="form-group">
			<label for="content">Content:</label>
			<textarea name="txtContent" class="form-control" value="">{{$article->content}}</textarea>
		</div>
		<br>
		<button type="submit" class="btn btn-success">Update</button>
		<a href="/blog" class="btn btn-danger">Cancel</a>
	</form>

@endsection