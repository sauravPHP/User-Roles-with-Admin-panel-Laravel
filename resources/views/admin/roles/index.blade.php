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
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($roles as $role)
	      <tr>
	        <td>{{ $loop->iteration }}</td>
	        <td>{{ $role->name }}</td>
	        <td>
	        	<a href="{{ route('roles.edit',$role->id) }}" title="Edit" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
	        	<a href="{{ route('roles.delete',$role->id) }}" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>
	        </td>
	      </tr>
	    @endforeach
    </tbody>
  </table>
@endsection