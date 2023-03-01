<header id="header-auth" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo auto me-lg-0"><a href="/" class="logo auto lg-0"><img src="assets/img/logo.png" alt=""
                    class="img-fluid px-4"></a><a href="/"><span>Zona Futsal</span>
                Purwakarta.</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hay, {{ auth()->user()->fullname }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a class="nav-link scrollto {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('register') ? 'active' : '' }}"
                            href="/register">Register</a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
