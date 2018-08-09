@extends('layouts.admin')
@section('content')
@php
//dd($user);
@endphp

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form action="{{ route('users.update', $user->id) }}" method="post">
    	@csrf
	<fieldset class="scheduler-border col-md-6">
    <legend class="scheduler-border">Edit User</legend>
		  <div class="form-group">
		    <label for="role">Name:</label>
		    <input type="text" class="form-control" name="name" id="name" value="{{ @$user->name }}">
		     @if ($errors->has('name'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('name') }}</span>
		        </div>
			@endif
		  </div>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" name="email" id="email" value="{{ @$user->email }}">
		     @if ($errors->has('email'))
		     	<div class="alert alert-danger">
		            <span>{{ $errors->first('email') }}</span>
		        </div>
			@endif
		  </div>
		  <div class="form-group">
		    <label for="password">Role:</label>
		    <select class="form-control" name="role" id="role">
		    	@foreach($roles as $role)
		    		<option @if($role->name == $user->role) selected @endif value="{{ $role->name }}">{{ $role->name }}</option>
		    	@endforeach
		    </select>
		  </div>

		  <button type="submit" class="btn btn-default">Update</button>
	</fieldset>
	</form>
@endsection