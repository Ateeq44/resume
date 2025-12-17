@extends('layouts.app')
@section('content')
<div class="container">
	<h3>Your Dashboard</h3>
	

	@if($resume && $resume->count())
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($resume as $key => $res)
			<tr>
				<td>{{ $key + 1 }}</td>
				<td>{{ $res->full_name }}</td>
				<td>{{ $res->email }}</td>
				<td>{{ $res->phone }}</td>
				<td><a href="{{ url('resume/show', $res->id) }}">View</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<a href="{{ route('resume.create') }}" class="btn btn-primary">Create Resume</a>
	@endif

</div>
@endsection