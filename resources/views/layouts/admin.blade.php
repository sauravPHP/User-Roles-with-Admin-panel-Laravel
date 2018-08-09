<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  @yield('header')

<link href="{!! asset('css/admin.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>


@include('layouts/inc/header')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      @include('layouts/inc/sidebar')
    </div>

    <div class="col-sm-9">
      @yield('content')
    </div>
  </div>
</div>

  @yield('footer')
</body>
</html>