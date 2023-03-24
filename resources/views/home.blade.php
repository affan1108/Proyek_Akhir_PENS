<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection</title>

    @include('components.css')
    <link href="temp/css/styles.css" rel="stylesheet" />
    <!--====== Jquery Ui CSS ======-->
    <!-- <link rel="stylesheet" href="estore/assets/css/jquery-ui.min.css"> -->

    <!--====== nice select CSS ======-->
    <!-- <link rel="stylesheet" href="estore/assets/css/nice-select.css"> -->

    <!--====== Bootstrap CSS ======-->
    <!-- <link rel="stylesheet" href="estore/assets/css/bootstrap.min.css"> -->

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="estore/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="estore/assets/css/style.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="estore/assets/css/LineIcons.css">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="estore/assets/css/materialdesignicons.min.css">

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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Katalog</a></li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/login">Pesanan Saya</a></li>
                                <li><a class="dropdown-item" href="/login">Penilaian Pesanan</a></li>
                                <li><a class="dropdown-item" href="/login">Riwayat Pesanan</a></li>
                                <!-- <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li> -->
                            </ul>
                        </li>
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
        <!-- /.navbar -->

        <!-- Header-->
        <header>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/promo4.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/promo5.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/promo4.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
    </header>

    <!--====== Content Card Style 4 Part Start ======-->
    <section class="content-card-style-4 pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-truck-fast"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Two-hour delivery</a></h4>
                            <p>Available in most metros on selected in-stock products</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-message-text"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Pusat Bantuan</a></h4>
                            <p>Ada Pertanyaan? Kami siap membantu anda</p>
                            <a href="/login" class="more">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-ticket-percent"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Klaim Voucher</a></h4>
                            <p>Dapatkan potongan harga hingga gratis ongkir</p>
                            <a href="/login" class="more">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Content Card Style 4 Part Ends ======-->

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($data as $row)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('assets/'.$row->foto)}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$row->nama}}</h5>
                                <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> -->
                                <!-- Product price-->
                                <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                                Rp. {{ number_format($row['harga'], 0, '.', '.') }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-primary mt-auto" href="/login">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            
                            <div class="card-body p-4">
                                <div class="text-center">
                                 
                                    <h5 class="fw-bolder">Special Item</h5>
                                  
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                              
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <section class="footer-style-3 pt-100 pb-100">
        <div class="container">
            <div class="footer-top">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7 col-sm-10">
                        <div class="footer-logo text-center">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="" height="100" width="100">
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

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>


</html>
