<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="col-md-3">
	  <a class="navbar-brand" href="#">Logo</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
  </div>
	<div class="col-md-9">
	  <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			{{ Auth::user()->name }}
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
			</div>
		  </li>
		</ul>
	  </div>
	</div>
</nav>