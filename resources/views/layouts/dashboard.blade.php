<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style-dashboard')
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            @include('includes.sidebar')

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Desktop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">
                                        <img src="/images/icon-user.png" alt="Profile Picture"
                                            class="rounded-circle mr-2 profile-picture" />
                                        Hi, Angga
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                                        <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="/" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block mt-2">
                                        <img src="/images/icon-cart-filled.svg" alt="Cart" />
                                        <div class="card-badge">3</div>
                                    </a>
                                </li>
                            </ul>

                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> Hi, Angga </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                {{-- Content --}}
                @yield('content')

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.script-dashboard')
    @stack('addon-script')
</body>

</html>