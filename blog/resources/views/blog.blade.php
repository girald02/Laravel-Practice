{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITTLE OF PAGE --}}
@section('title')
	ALL ARTICLES
@endsection

{{-- PAGE CONTENT --}}
@section('content')

{{-- SUCCESSFULLY NOTIFICATION --}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
		
		<h1 class="center">Articles</h1>
		<a href="/blog/create"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"> Add new Article</i></button></a><br><br>
		<table class="table table-responsive table-bordered">
			<tr>
				<th>ID</th>
				<th>TITLE</th>
				<th>CONTENT</th>
				<th class="center" colspan="3">ACTION</th>
			</tr>
			{{-- FOREACH STATEMENT --}}
			@foreach($articles as $arti_data)
			<tr>
				<td>{{$arti_data['id']}}</td>
				<td>{{$arti_data['title']}}</td>
				<td>{{$arti_data['content']}}</td>
				<td class="center"><a href="blog/{{$arti_data['id']}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
				
				<td><a class="btn btn-primary" href="blog/{{$arti_data['id']}}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a></td>

				<td>
					<form action="/blog/{{$arti_data['id']}}" method="POST">
						@csrf
						@method('DELETE')
						<input type="submit" value="DELETE" class="btn btn-danger"></i></input>
					</form>
				</td>

			</tr>
			@endforeach
		</table>
		{{-- PAGINATION --}}
		{{$articles->links()}}

@endsection