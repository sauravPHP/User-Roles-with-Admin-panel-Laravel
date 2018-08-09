@extends('layouts.admin')
@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form action="{{ route('roles.update',$role->id) }}" method="post">
    	@csrf
	<fieldset class="scheduler-border col-md-6">
    <legend class="scheduler-border">Update Role</legend>
		  <div class="form-group">
		    <label for="role">Role Name:</label>
		    <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}">
		     @if ($errors->has('name'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('name') }}</span>
		        </div>
			@endif
		  </div>
		  <button type="submit" class="btn btn-default">Update</button>
	</fieldset>
	</form>
@endsection