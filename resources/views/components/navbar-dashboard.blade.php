<nav class="main-header navbar navbar-expand-md navbar-white navbar-light">
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
                <li class="nav-item"><a class="nav-link {{'dashboard' == request()->path() ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">Home</a>
                </li>
                @if(Auth::user()->name != 'admin')
                <li class="nav-item"><a class="nav-link {{'/dashboard/katalog' == request()->path() ? 'active' : '' }}"
                        href="/dashboard/katalog">Katalog</a></li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="dropdown-toggle {{'/pesanansaya'  == request()->path() || 'dashboard/penilaianpesanan'  == request()->path() || 'dashboard/riwayatpesanan'  == request()->path()? 'nav-link active' : 'nav-link' }}">
                        Pages
                        <span>
                            @php
                            $a = App\Models\Invoice::where('payment_id', '!=', null)->pluck('id');
                            $b = App\Models\Payment::where('diterima', 0)->where('user_id', Auth::user()->id)->count();
                            $c = App\Models\Invoice::where('payment_id', null)->where('user_id', Auth::user()->id)->count();
                            $d = $b + $c;
                            $e = App\Models\Payment::where('user_id', Auth::user()->id)->where('diterima',
                            1)->where('rating', null)->count();
                            @endphp
                            ({{$d + $e}})
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{'/pesanansaya' == request()->path() ? 'active' : '' }}"
                                href="/pesanansaya">Pesanan Saya
                                <span class="float-right">
                                    @php
                                    $a = App\Models\Invoice::where('payment_id', '!=', null)->where('user_id', Auth::user()->id)->pluck('id');
                                    $b = App\Models\Payment::where('diterima', 0)->where('user_id', Auth::user()->id)->count();
                                    $c = App\Models\Invoice::where('payment_id', null)->where('user_id', Auth::user()->id)->count();
                                    $d = $b + $c;
                                    @endphp
                                    ({{$d}})
                                </span>
                            </a></li>
                        <li><a class="dropdown-item {{'dashboard/penilaianpesanan' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/penilaianpesanan">Penilaian Pesanan
                                <span class="float-right">
                                    @php
                                    $data = App\Models\Payment::where('user_id', Auth::user()->id)->where('diterima',
                                    1)->where('rating', null)->count();
                                    @endphp
                                    @if($data == 0)
                                    @else
                                    ({{$data}})
                                    @endif
                                </span>
                            </a></li>
                        <li><a class="dropdown-item {{'dashboard/riwayatpesanan' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/riwayatpesanan">Riwayat Pesanan</a></li>
                        <!-- <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li> -->
                    </ul>
                </li>
                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3" action="/dashboard/katalog" method="GET">
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
                @else
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="dropdown-toggle {{'dashboard/daftarpesanan'  == request()->path() || 'dashboard/daftarproduk'  == request()->path() || 'dashboard/daftarpenilaian'  == request()->path() || 'dashboard/report'  == request()->path() || 'dashboard/warna'  == request()->path() || 'dashboard/user'  == request()->path() || 'dashboard/payment'  == request()->path() ? 'nav-link active' : 'nav-link' }}">Master
                        Data
                        <span>
                            @php
                            $data = App\Models\Invoice::with('payment');
                            @endphp
                            @if($data == 0)
                            @else
                            ({{$data->payment_id}})
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{'dashboard/daftarpesanan' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/daftarpesanan">Daftar Pesanan
                                <span class="float-right">
                                    @php
                                    $sdata = App\Models\Invoice::all();
                                    @endphp
                                    @foreach($sdata as $data)
                                    @if($data->payment_id)
                                    @if($data->payment->diterima == 0)
                                    ({{$data->count()}})
                                    @endif
                                    @endif
                                    @endforeach
                                </span>
                            </a></li>
                        <li><a class="dropdown-item {{'dashboard/daftarproduk' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/daftarproduk">Daftar Produk</a></li>
                        <li><a class="dropdown-item {{'dashboard/daftarpenilaian' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/daftarpenilaian">Daftar Penilaian</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"
                                class="dropdown-item dropdown-toggle {{'dashboard/warna'  == request()->path() || 'dashboard/user'  == request()->path() || 'dashboard/payment'  == request()->path() ? 'active' : ''}}">Table</a>
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

                                <li><a href="/dashboard/warna"
                                        class="dropdown-item {{'dashboard/warna' == request()->path() ? 'active' : '' }}">Table
                                        Warna</a></li>
                                <li><a href="/dashboard/user"
                                        class="dropdown-item {{'dashboard/user' == request()->path() ? 'active' : '' }}">Tabel
                                        User</a></li>
                                <li><a href="/dashboard/payment"
                                        class="dropdown-item {{'dashboard/payment' == request()->path() ? 'active' : '' }}">Tabel
                                        Order</a></li>
                                <!-- <li><a href="#" class="dropdown-item">Tabel Invoice</a></li>
                                <li><a href="#" class="dropdown-item">Tabel Voucher</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item {{'dashboard/report' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/report">Inventory</a></li>
                    </ul>
                </li>
                <div class="col-3">
                    <li class="nav-item dropdown">
                        <a class="icon-btn primary-icon-text icon-text-btn" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="icon-text text-style-1">
                                0
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </div>
                @endif
            </ul>
            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item dropdown">
                    <div class="navbar-nav mb-lg-0">
                        @php
                        $data = App\Models\Keranjang::where('user_id', Auth::user()->id)->where('payment',
                        null)->count();
                        @endphp
                        <div class="col-3 mt-2">
                            <!-- navbar cart start -->
                            <div class="navbar-cart">
                                <a class="icon-btn primary-icon-text icon-text-btn" href="/keranjang">
                                    <img src="{{asset('estore/assets/images/icon-svg/cart-1.svg')}}" alt="Icon">
                                    <!-- <i class="lni lni-cart"></i> -->
                                    @if($data > 0)
                                    <span class="icon-text text-style-1">
                                        {{$data}}
                                    </span>
                                    @else
                                    @endif
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link">
                        <button
                            class="btn {{'dashboard/profile' == request()->path() ? 'btn-primary ' : 'btn-outline-primary ' }}">
                            <i class="fas fa-user"></i>
                            {{Auth::user()->name}}
                        </button>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{'dashboard/profile' == request()->path() ? 'active' : '' }}"
                                href="/dashboard/profile">Akun Saya</a></li>
                        <!-- <li><a class="dropdown-item {{ 'keranjang' == request()->path() ? 'active' : '' }}"
                                href="/keranjang">Keranjang
                                <span class="float-right">
                                    @php
                                    $data = App\Models\Keranjang::where('user_id', Auth::user()->id)->where('payment', null)->count();
                                    @endphp
                                    @if($data == 0)
                                    @else
                                    ({{$data}})
                                    @endif
                                </span>
                            </a></li> -->
                        <li><a class="dropdown-item {{ 'logout' == request()->path() ? '' : 'active bg-danger' }}"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
            <!-- <a href="/register">
                    <button class="btn btn-primary mr-3">
                        Sign Up
                    </button>
                    </a> -->

            <!-- <a href="/profile">
                <button class="btn btn-outline-primary">
                    <i class="fas fa-user"></i>
                    {{Auth::user()->name}}
                </button>
            </a> -->
        </div>
    </div>
</nav>
