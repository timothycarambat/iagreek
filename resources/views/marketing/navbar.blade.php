<!-- Header -->
  <header id="header" class="alt">
    <h1><a href="/">IAGREEK</a></h1>
    <nav id="nav">
      <ul>
        <li class="special">
          <a href="#menu" class="menuToggle"><span>Menu</span></a>
          <div id="menu">
            @if( Auth::check() )
            <div class='greeting'>
              <h4> Hello, {{Auth::user()->name}} </h4>
              <p><i>{{Auth::user()->org_name}}</i></p>
            </div>
            @endif
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/getting_started">Getting Started Guide</a></li>
              @if( !Auth::check() )
                <li><a href="/register">Sign Up</a></li>
                <li><a href="{{$_ENV['ALT_URL']}}">Sign In</a></li>
              @else
                <li><a href="{{$_ENV['ALT_URL']}}">Sign Into App</a></li>
                <li><a href="/logout">Sign Out</a></li>

              @endif
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </header>
