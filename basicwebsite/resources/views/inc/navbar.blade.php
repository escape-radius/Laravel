<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Acme') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Request::is('') ? 'active' : ''}}" href="/">Home</a>
                  </li>
                  <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
            </ul>

        </div>
    </dsiv>
</nav>
