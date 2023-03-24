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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
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
    <link rel="stylesheet" href="{{asset('plugins/bs-stepper/css/bs-stepper.min.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo2.png')}}">
    <link href="{{ asset('plugins/bootstrap-summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
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
                            <h1 class="m-0"><small>Add Produk</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Add Produk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <!-- <h3 class="card-title">bs-stepper</h3> -->
                                </div>
                                <div class="card-body p-0">
                                    <form action="/insert" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="bs-stepper">
                                            <div class="bs-stepper-header" role="tablist">

                                                <div class="step" data-target="#logins-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="logins-part" id="logins-part-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Data Produk</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#information-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="information-part" id="information-part-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Foto Produk</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bs-stepper-content">

                                                <div id="logins-part" class="content" role="tabpanel"
                                                    aria-labelledby="logins-part-trigger">
                                                    <div class="form-group">
                                                        <label for="exampleInputName">Nama</label>
                                                        <input type="name" class="form-control" id="exampleInputName"
                                                            placeholder="Masukkan Nama" name="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputHarga">Harga</label>
                                                        <input type="text" class="form-control" id="exampleInputHarga"
                                                            placeholder="Masukkan Harga" name="harga">
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label>Ukuran</label>
                                                        <div class="select2-green">
                                                            <select class="select2" multiple="multiple"
                                                                data-placeholder="Pilih Ukuran"
                                                                data-dropdown-css-class="select2-green"
                                                                style="width: 100%;" name="ukuran[]">
                                                                @foreach (\App\Models\Ukuran::all() as $r)
                                                                <option value="{{ $r->nama }}"
                                                                    {{ $r->id==@$dt->ukuran? 'selected' : '' }}>
                                                                    {{ $r->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                                </div>
                                                <div id="information-part" class="content" role="tabpanel"
                                                    aria-labelledby="information-part-trigger">
                                                    <div class="form-group">
                                                        <label>Foto Produk</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control" id="customFile"
                                                                name="foto">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label class="control-label">Deskripsi</label>
                                                        <textarea name="deskripsi" id="summernote_1" rows="8" class="form-control">{{ @$dt->deskripsi }}</textarea>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <!-- <label>Deskripsi</label>
                                                        <textarea class="form-control" rows="3" placeholder="Deskripsi"
                                                            name="deskripsi"></textarea> -->
                                                        <input type="text" class="form-control"
                                                            placeholder="Tulis Deskripsi" name="deskripsi">
                                                    </div>
                                                    <button class="btn btn-primary"
                                                        onclick="stepper.previous()">Previous</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    <script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var s_note = $('#summernote_1');

            var summernote = s_note.summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });


            s_note.on("summernote.change", function (e) {
                //do jobs for changing event
            });
        });
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

        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        });

        $('#warna').change(function (e) {
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
                        // $('#some_user').empty().trigger('change');
                        // $('#some_user').append(dataItems);
                        // $('#some_user').attr('required', true);
                        // console.log(dataItems); 
                    }

                });
            }

        });

    </script>
</body>


</html>
