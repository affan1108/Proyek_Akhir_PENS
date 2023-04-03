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
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/katalog">Katalog</a></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Pages</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/pesanansaya">Pesanan Saya</a></li>
                        <li><a class="dropdown-item" href="/penilaianpesanan">Penilaian Pesanan</a></li>
                        <li><a class="dropdown-item" href="/riwayatpesanan">Riwayat Pesanan</a></li>
                        <!-- <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li> -->
                    </ul>
                </li>
                @if(Auth::user()->name == 'admin')
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Master Data</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/daftarpesanan">Daftar Pesanan</a></li>
                        <li><a class="dropdown-item" href="/daftarproduk">Daftar Produk</a></li>
                        <li><a class="dropdown-item" href="/daftarpenilaian">Daftar Penilaian</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-item dropdown-toggle">Table</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <!-- <li>
                                        <a tabindex="-1" href="#" class="dropdown-item">Table Warna</a>
                                    </li> -->

                                <!-- Level three dropdown-->
                                <!-- <li class="dropdown-submenu">
                                        <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="dropdown-item dropdown-toggle">level 2</a>
                                        <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                                        </ul>
                                    </li> -->
                                <!-- End Level three -->

                                <li><a href="/warna" class="dropdown-item">Table Warna</a></li>
                                <li><a href="/user" class="dropdown-item">Tabel User</a></li>
                                <li><a href="/payment" class="dropdown-item">Tabel Order</a></li>
                                <!-- <li><a href="#" class="dropdown-item">Tabel Invoice</a></li>
                                <li><a href="#" class="dropdown-item">Tabel Voucher</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/report">Finansial</a></li>
                    </ul>
                </li>
                @endif
                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3" action="/katalog" method="GET">
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
            <!-- <a href="/register">
                    <button class="btn btn-primary mr-3">
                        Sign Up
                    </button>
                    </a> -->
            <a href="/profile">
                <button class="btn btn-outline-primary">
                    <i class="fas fa-user"></i>
                    {{Auth::user()->name}}
                </button>
            </a>
        </div>
    </div>
</nav>
