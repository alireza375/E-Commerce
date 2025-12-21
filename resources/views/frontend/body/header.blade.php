@php
    $route = Route::current()->getName();
@endphp

<div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container-fluid fixed-top">

                            <div class="container px-0">
                                <nav class="bg-white navbar navbar-light navbar-expand-xl">
                                    <a href="index.html" class="navbar-brand">
                                        <h1 class="text-primary display-6">Fruitables</h1>
                                    </a>
                                    <button class="px-3 py-2 navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarCollapse">
                                        <span class="fa fa-bars text-primary"></span>
                                    </button>
                                    <div class="bg-white collapse navbar-collapse" id="navbarCollapse">
                                        <div class="mx-auto navbar-nav">
                                            <a href="index.html" class="nav-item nav-link active">Home</a>
                                            <a href="shop.html" class="nav-item nav-link">Product</a>
                                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                                        </div>
                                        <div class="m-3 d-flex me-0">
                                            <a href="#" class="my-auto position-relative me-4">
                                                <i class="fa fa-shopping-bag fa-2x"></i>
                                                <span
                                                    class="px-1 position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark"
                                                    style="top: -5px; left: 15px; height: 20px; min-width: 20px;">0</span>
                                            </a>
                                            <div class="quote_btn-container">
                                                @if (Auth::check())
                                                    @if (Auth::user()->role === 'admin')
                                                        <a href="{{ route('admin.admin_dashboard') }}">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <span>
                                                                Dashboard
                                                            </span>
                                                        </a>
                                                    @elseif(Auth::user()->role === 'user')
                                                        <a href="{{ route('user') }}">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <span>
                                                                Dashboard
                                                            </span>
                                                        </a>
                                                    @endauth
                                                @else
                                                    <a href="{{ route('login') }}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>
                                                            Login
                                                        </span>
                                                    </a>
                                                    <a href="{{ route('register') }}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>
                                                            Sign Up
                                                        </span>
                                                    </a>

                                                @endif
                                        </div>
                                    </div>
                                </div>
                        </div>
            </nav>
        </div>


    </div>
    </nav>
</div>
</div>
</header>
</div>
