@extends('layouts.admin')
@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Sr No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($users as $user)
	      <tr>
	        <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
	        <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
	        <td>
	        	<a href="{{ route('users.edit',$user->id) }}" title="Edit" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
	        	<a href="{{ route('users.delete',$user->id) }}" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>
	        </td>
	      </tr>
	    @endforeach
    </tbody>
  </table>
@endsection