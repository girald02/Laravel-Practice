{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITLE --}}
@section('title')
	Show Customer Table
@endsection

{{-- CONTENT --}}
@section('content')
	<br>
	<br>
	<center><h1>ALL CUSTOMER</h1></center>
	<br>
	<table class="table table-responsive table-hover">
		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Phone</th>
				<th scope="col">Address</th>
				<th scope="col">Country</th>
				<th scope="col">Rating</th>
			</tr>
		</thead>
		<tbody>
			@forelse($customers as $customer)
			<tr>
				<td>{{$customer->id}}</td>
				<td>{{$customer->name}}</td>
				<td>{{$customer->email}}</td>
				<td>{{$customer->phone}}</td>
				<td>{{$customer->address}}</td>
				<td>{{$customer->country}}</td>
				<td>{{$customer->rating}}</td>
			</tr>

			@empty
			<tr>
				<td colspan="7" style="background:grey;color: white;">
					<center>NO DATA FOUND!</center>
				</td>
			</tr>
			@endforelse
		</tbody>
	</table>
@endsection
