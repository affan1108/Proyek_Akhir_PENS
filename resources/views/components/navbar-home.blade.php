<!-- <nav class="main-header navbar navbar-expand-md navbar-primary navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/catalog">Katalog</a></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Pages</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/pesanansaya">Pesanan Saya</a></li>
                        <li><a class="dropdown-item" href="/penilaianpesanan">Penilaian Pesanan</a></li>
                        <li><a class="dropdown-item" href="/riwayatpesanan">Riwayat Pesanan</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/register">
                <button class="btn btn-sm btn-default mr-3">
                    Sign Up
                </button>
            </a>
            <a href="/login">
                <button class="btn btn-sm btn-outline-default">
                    Sign In
                </button>
            </a>
        </div>
    </div>
</nav> -->

<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="/dashboard" class="navbar-brand">
            <img src="{{asset('assets/images/logo.png')}}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Ameliia Collection</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="{{'/' == request()->path() ? 'nav-link active' : 'nav-link' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item"><a class="{{'catalog' == request()->path() ? 'nav-link active' : 'nav-link' }}" href="/catalog">Katalog</a></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Pages</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/pesanansaya">Pesanan Saya</a></li>
                        <li><a class="dropdown-item" href="/dashboard/penilaianpesanan">Penilaian Pesanan</a></li>
                        <li><a class="dropdown-item" href="/dashboard/riwayatpesanan">Riwayat Pesanan</a></li>
                        <!-- <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li> -->
                    </ul>
                </li>
                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3" action="/catalog" method="GET">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
            <a href="/register">
                <button class="btn btn-primary mr-3">
                    Sign Up
                </button>
            </a>
            <a href="/login">
                <button class="btn btn-outline-primary">
                    Sign In
                </button>
            </a>
        </div>
    </div>
</nav>
