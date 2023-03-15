@include('backend.partials.meta')

<body class="theme-dark" style="overflow-y: auto;">
    <div id="app">
        @include('backend.partials.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('container')
            @include('backend.partials.footer')
        </div>
    </div>
