{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITTLE OF PAGE --}}
@section('title')
	ALL ARTICLES
@endsection

{{-- PAGE CONTENT --}}
@section('content')


{{-- EDIT SUCCESSFULLY NOTIFICATION --}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

	<a href="/blog" class="btn btn-info">BACK</a>

	<h1 class="center">VIEW ARTICLE</h1>
	<h4>{{$article->title}}</h4>
	<p>{{$article->content}}</p>

	<a href="{{$article->id}}/edit"><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></button></a>



@endsection