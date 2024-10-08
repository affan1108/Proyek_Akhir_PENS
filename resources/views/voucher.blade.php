<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Invoice</title>

    @include('components.css')
    <link href="{{asset('temp/css/styles.css')}}" rel="stylesheet" />
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/style.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/LineIcons.css')}}">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/materialdesignicons.min.css')}}">

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/dashboard" class="navbar-brand">
                    <img src="{{asset('assets/images/logo.png')}}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Ameliia Collection</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/catalog">Catalog</a></li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
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
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Master Data</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/daftarpesanan">Daftar Pesanan</a></li>
                                <li><a class="dropdown-item" href="/daftarproduk">Daftar Produk</a></li>
                                <li><a class="dropdown-item" href="/daftarpenilaian">Daftar Penilaian</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">Table</a>
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
                                        <li><a href="#" class="dropdown-item">Tabel User</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @endif
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
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Voucher</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="{{url('/hijab')}}">Hijab</a></li> -->
                                <!-- <li class="breadcrumb-item"><a href="{{url('/detailhijab')}}">Detail Hijab</a></li> -->
                                <li class="breadcrumb-item active">Voucher</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>

            <div class="content">
                <div class="container">
                    <form action="/pilihvoucher" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            @foreach ($rows as $row)
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-info">
                                    <span class="info-box-icon elevation-1">X1</span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Potongan Ongkir</span>
                                        <span class="info-box-number">Rp. {{$row->harga}}</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                        <span class="progress-description">

                                            <input type="hidden" name="voucher_id" value="{{ $row->id }}">
                                        </span>
                                        <a href="/pilihvoucher/ {{$row->id}}">
                                        <button type="submit" class="btn btn-primary btn-xs">
                                            Gunakan
                                        </button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                            <!-- <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">New Members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>

                            </div>

                        </div> -->

                        </div>
                    </form>
                </div>
            </div>

            <!-- <section class="content">
                <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Harga</th>
                            <th>Kurir</th>
                            <th scope="col">Nama Layanan</th>
                            <th scope="col">Biaya</th>
                            <th scope="col">ETD (Estimates Days)</th>
                            <th scope="col">Biaya</th>
                        </tr>
                    </thead>
                    <form action="/pilihvoucher" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <tbody>
                        @foreach ($rows as $row)
                        <tr>
                            <td>
                                {{$row->harga}}
                                <input type="hidden" name="voucher_id" value="{{ $row->id }}">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Pilih</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </form>
                </table>
                </div>
            </section> -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <section class="footer-style-3 pt-100 pb-100">
            <div class="container">
                <div class="footer-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-7 col-sm-10">
                            <div class="footer-logo text-center">
                                <a href="index.html">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="" height="100" width="100">
                                </a>
                            </div>
                            <h5 class="heading-5 text-center mt-30">Follow Us</h5>
                            <ul class="footer-follow text-center">
                                <!-- <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li> -->
                                <!-- <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li> -->
                                <li><a href="javascript:void(0)"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-widget-wrapper text-center pt-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h5 class="footer-title">LAYANAN</h5>

                                <ul class="footer-link">
                                    <li><a href="javascript:void(0)">Katalog</a></li>
                                    <li><a href="javascript:void(0)">Voucher</a></li>
                                    <li><a href="javascript:void(0)">Bantuan</a></li>
                                    <!-- <li><a href="javascript:void(0)">Voucher</a></li> -->
                                    <!-- <li><a href="javascript:void(0)">Apps and Games</a></li> -->
                                    <!-- <li><a href="javascript:void(0)">Oculus for Business</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h5 class="footer-title">TENTANG KAMI</h5>

                                <ul class="footer-link">
                                    <li><a href="javascript:void(0)">Profil</a></li>
                                    <li><a href="javascript:void(0)">Kebijakan</a></li>
                                    <!-- <li><a href="javascript:void(0)">Downloads</a></li> -->
                                    <!-- <li><a href="javascript:void(0)">Tools</a></li> -->
                                    <!-- <li><a href="javascript:void(0)">Developer Blog</a></li> -->
                                    <!-- <li><a href="javascript:void(0)">Developer Forums</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h5 class="footer-title">PENGIRIMAN</h5>

                                <ul class="footer-link">
                                    <li><a href="javascript:void(0)">JNE</a></li>
                                    <li><a href="javascript:void(0)">POS Indonesia</a></li>
                                    <li><a href="javascript:void(0)">TIKI</a></li>
                                    <!-- <li><a href="javascript:void(0)">Connect</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h5 class="footer-title">PEMBAYARAN</h5>

                                <ul class="footer-link">
                                    <li><a href="javascript:void(0)">Kartu Debit</a></li>
                                    <li><a href="javascript:void(0)">Kartu Kredit</a></li>
                                    <li><a href="javascript:void(0)">Alfamaret / Indomaret</a></li>
                                    <li><a href="javascript:void(0)">Transfer Bank</a></li>
                                    <!-- <li><a href="javascript:void(0)"><img src="assets/mandiri.png" alt="" height="25" width="50"></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-copyright text-center">
                    <p class="m-0 text-center text-black">Copyright &copy; Ameliia Collection 2023</p>
                </div>
        </section>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('components.script')
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>
