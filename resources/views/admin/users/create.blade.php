@extends('layouts.admin')
@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form action="{{ route('users.store') }}" method="post">
    	@csrf
	<fieldset class="scheduler-border col-md-6">
    <legend class="scheduler-border">Create User</legend>
		  <div class="form-group">
		    <label for="role">Name:</label>
		    <input type="text" class="form-control" name="name" id="name">
		     @if ($errors->has('name'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('name') }}</span>
		        </div>
			@endif
		  </div>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" name="email" id="email">
		     @if ($errors->has('email'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('email') }}</span>
		        </div>
			@endif
		  </div>
		  <div class="form-group">
		    <label for="password">Password:</label>
		    <input type="text" class="form-control" name="password" id="password">
		     @if ($errors->has('password'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('password') }}</span>
		        </div>
			@endif
		  </div>
		  <div class="form-group">
		    <label for="password">Role:</label>
		    <select class="form-control" name="role" id="role">
		    	@foreach($roles as $role)
		    		<option value="{{ $role->name }}">{{ $role->name }}</option>
		    	@endforeach
		    </select>
		  </div>

		  <button type="submit" class="btn btn-default">Create</button>
	</fieldset>
	</form>
@endsection