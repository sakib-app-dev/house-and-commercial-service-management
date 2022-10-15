<!--//top-header-content-->
<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1><a class="navbar-brand" href="{{ Route('home') }}">Home & Commercial<br><span>Maintenance and Services</span></a></h1>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About us</a>
                    </li>
                    @if (Route::has('login'))
                    @auth 
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="nav-item">
                            <a class="ml-lg-3 mt-lg-0 mt-3 book btn btn-secondary btn-style" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                <i class="fas fa-sign-out-alt"></i>
                
                                {{ __('Log Out') }}
                            </a>
                        </div>
                    </form>
                    @else
                    <li class="nav-item">
                    <a href="{{ route('login') }}" class="ml-lg-3 mt-lg-0 mt-3 book btn btn-secondary btn-style">Log-in</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('register') }}" class="ml-lg-3 mt-lg-0 mt-3 book btn btn-secondary btn-style">Sign-in</a>
                    </li>
                    @endauth
                    @endif
                </ul>
            </div>
            
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //w3l-header -->