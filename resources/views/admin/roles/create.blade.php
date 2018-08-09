@extends('layouts.admin')
@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form action="{{ route('roles.store') }}" method="post">
    	@csrf
	<fieldset class="scheduler-border col-md-6">
    <legend class="scheduler-border">Add Role</legend>
		  <div class="form-group">
		    <label for="role">Role Name:</label>
		    <input type="text" class="form-control" name="name" id="name">
		     @if ($errors->has('name'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('name') }}</span>
		        </div>
			@endif
		  </div>
		  <button type="submit" class="btn btn-default">Create</button>
	</fieldset>
	</form>
@endsection