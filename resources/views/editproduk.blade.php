<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo2.png')}}">
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

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Produk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/daftarproduk')}}">Daftar Produk</a></li>
                                <li class="breadcrumb-item active">Edit Produk</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="card card-default">
                        <div class="card-header bg-secondary">
                            <h3 class="card-title">Edit Produk</h3>
                        </div>

                        <div class="card-body">
                            <form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- <input type="hidden" name="id"> -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nama</label>
                                            <input type="name" class="form-control" id="exampleInputName"
                                                placeholder="Masukkan Nama" name="nama" value="{{$data->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Harga</label>
                                            <input type="name" class="form-control" id="exampleInputName"
                                                placeholder="Masukkan Harga" name="harga" value="{{$data->harga}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <!-- <textarea class="form-control" rows="3"
                                                placeholder="Deskripsi" nama="deskripsi">{{$data->deskripsi}}</textarea> -->
                                            <input type="text" class="form-control" placeholder="Tulis Deskripsi"
                                                name="deskripsi" value="{{$data->deskripsi}}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Produk</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="foto"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">{{$data->foto}}</label>
                                                <div class="col-12 product-image-thumbs">
                                                    <img src="{{asset('assets/'.$data->foto)}}" height="200"
                                                        width="230">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="card-footer flex items-center justify-end float-right">
                                <a href="{{url('/daftarproduk')}}"><button type="back" class="btn btn-outline-secondary">Cancel</button></a>
                                    <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>


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
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)

        </script>
        <!-- ChartJS -->
        <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
        <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
            $(function () {
                bsCustomFileInput.init();
            });

        </script>
</body>

</html>
