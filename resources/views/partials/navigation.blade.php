    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <b>Guru</b>student
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>

                <form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Search for users">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->username }}</a></li>
                    @can('view_acp')
                        <li><a href="#">Admin CP</a></li>
                    @endcan
                    <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
                @endif
              </ul>
          </div>
      </div>
  </div>
</nav>