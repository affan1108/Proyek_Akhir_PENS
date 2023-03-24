<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Daftar Pesanan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="shortcut icon" href="assets/images/logo2.png">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><small>Detail Hijab</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Detail Hijab</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                <div class="card card-solid">
                        <div class="card-body pb-0">
                            <div class="row">
                                @foreach($data as $row)
                                @if($row->diterima == '0')
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            {{$row->user->name}}
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>{{$row->invoice->keranjang->produk->nama}}</b></h2>
                                                    <p class="text-muted text-sm">
                                                        <b>Warna: </b>{{$row->invoice->keranjang->warna->warna}}
                                                        <br>
                                                        <b>Ukuran: </b>{{$row->invoice->keranjang->warna->ukuran}}
                                                        <br>
                                                        <b>Qty: </b>{{$row->invoice->keranjang->jumlah}}
                                                        <br>
                                                        <b>Harga: </b>{{$row->invoice->total}}
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                                    {{$row->user->alamat}}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Nomor Telepon: {{$row->user->nomer}}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="{{asset('assets/'.$row->invoice->keranjang->produk->foto)}}" alt="user-avatar"
                                                        class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <!-- <a href="#" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-comments"></i>
                                                </a> -->
                                                @if($row->status == 'capture' || $row->status == 'settlement')
                                                <a href="#" class="btn btn-sm btn-success">
                                                    Lihat Pesanan
                                                </a>
                                                @else
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    Lihat Pesanan
                                                </a>
                                                @endif
                                                <!-- <button type="button" class="btn btn-danger">
                                                    Lihat Pesanan
                                                </button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                                <ul class="pagination justify-content-center m-0">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        $(document).ready(function () {
            $('select[name="warna_id"]').on('change', function () {
                let stokId = $(this).val();

                if (stokId) {
                    $.ajax({
                        url: '/hijab/' + stokId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            // <input type="text" id="stok" name="stok">
                            $('#stok').empty();
                            $.each(data, function (key, value) {
                                $('#stok').append('<span>Jumlah Stok '+ value +'</span>');
                            });
                        }
                    });
                } else {
                    $('#stok').empty();
                }
            });
        });
        // $('#warna').change(function(e) {
        //     e.preventDefault();
        //     kirim();
        // });

        // function kirim(warna){
        //     var id = $('#warna').val();
        //     $.ajax({
        //         url : 'data.php',
        //         type : 'POST',
        //         data : {id:warna},
        //         datatype : 'json',
        //         success: function(data){
        //             $('#sstok').val(data.stok);
        //         }
        //     })
        // }

        $(document).ready(function () {
            $('.product-image-thumb').on('click', function () {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })

        $('#some_department').change(function (e) {
            // $('#some_user').empty().trigger('change');  
            var val = $(this).val();
            var url = "{{ route('dokumen.get_user') }}";
            if (val != null) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        kirim: val
                    },
                    success: function (response) {
                        var dataItems = "";
                        // var responsecount = response.length;
                        for (var i = 0; i < response.length; i++) {
                            var pars = response[i];
                            dataItems += "<option value='" + pars.id + "'>" + pars.detail +
                                "</option>";


                        }
                        $('#some_user').empty().trigger('change');
                        $('#some_user').append(dataItems);
                        $('#some_user').attr('required', true);
                        // console.log(dataItems); 
                    }

                });
            }

        });

    </script>
</body>

</html>
