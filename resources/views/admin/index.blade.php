@extends('layouts.admin')
@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
 <div class="container">
  <div class="jumbotron">
    <h1>Welcome To Admin Panel</h1> 
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu augue at massa posuere placerat eu ac nisi. Vestibulum eget mollis lectus, in blandit nisi. Nunc vestibulum, nisi at finibus gravida, augue massa lobortis augue, et fringilla metus est non arcu. Etiam vel massa semper velit vulputate fringilla.</p> 
  </div>
</div>
@endsection