<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="{{ url('/') }}" class="logo m-0 float-start">PunamuDecoration</a>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
            <li class="{{ Request::is('product') ? 'active' : '' }}"><a href="{{ url('product') }}">Our Services</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Contact Us</a></li>
            @if (Auth::check())
                @if (auth()->user()->role == 'customer')
                    <li><a href="{{ url('dashboard/cart') }}">Cart</a></li>
                    <li><a href="{{ url('dashboard/transaction') }}">Transactions</a></li>
                @elseif (auth()->user()->role == 'admin')
                    <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                @endif
                @else
                    <li><a href="{{ url('login') }}">Login</a></li>
            @endif
          </ul>

          <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
