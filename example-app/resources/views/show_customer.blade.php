{{-- MAIN TEMPLATE --}}
@extends('layouts.master')

{{-- TITLE --}}
@section('title')
	Show Customer Table
@endsection

{{-- IF SUCCESS ADD --}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


{{-- IF SUCCESS DELETE ADD --}}
@if(session()->has('message-delete'))
    <div class="alert alert-danger">
        {{ session()->get('message-delete') }}
    </div>
@endif

{{-- CONTENT --}}
@section('content')
	<br>
	<br>
	<center><h1>ALL</h1></center>
	<br>
	<a href="/customer/create" class="btn btn-success">ADD CUSTOMER</a>
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
				<th scope="col" colspan="2"><center>Action</center></th>
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
				<td><a href="customer/{{$customer->id}}">View</a>
				</td>
				<td>
					<form action="/customer/{{$customer->id}}" method="post">
						@csrf
						@method('DELETE')
						<input hidden="true" type="text" name="id" value={{$customer->id}}>
						<button type="submit">Delete</button>
					</form>
				</td>
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

	{{-- PAGINATION --}}
	{{$customers->links()}}
@endsection




