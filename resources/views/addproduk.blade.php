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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
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
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="shortcut icon" href="assets/images/logo2.png">
    <link href="{{ asset('plugins/bootstrap-summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/images/logo.png" alt="AdminLTELogo" height="60" width="60">
            <h3>Ameliia Collection</h3>
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/dashboard')}}" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
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
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link bg-success">
                <img src="assets/images/logo2.png" alt="Logo Ameliia Collection"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="d-block"> Ameliia Collection</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/images/user.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/profile" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item bg-success">
                            <a href="{{url('/dashboard')}}" class="nav-link bg-success-active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if(auth()->user()->name!="admin")
                        <li class="nav-header"><strong>USER</strong></li>
                        @endif
                        <li class="nav-item">
                            <a href="{{url('/pesanansaya')}}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Pesanan Saya
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/riwayatpesanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Riwayat Pesanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/penilaianpesanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Penilaian Pesanan
                                </p>
                            </a>
                        </li>
                        @if(auth()->user()->name=="admin")
                        <li class="nav-header"><strong>ADMIN</strong></li>
                        <li class="nav-item">
                            <a href="{{url('/daftarpesanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Daftar Pesanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/daftarproduk')}}" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Daftar Produk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/daftarpenilaian')}}" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Daftar Penilaian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/warna" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Warna</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ukuran" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Ukuran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ekspedisi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Ekspedisi</p>
                                    </a>
                                </li>
                                @endif
                            </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Produk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/daftarproduk')}}">Daftar Produk</a></li>
                                <li class="breadcrumb-item active">Add Produk</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="content">
                <div class="container-fluid">
                    <div class="card card-default">
                        <div class="card-header bg-success">
                            <h3 class="card-title">Add New Produk</h3>
                        </div>
                        <div class="card-body">
                            <form action="/insert" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nama</label>
                                            <input type="name" class="form-control" id="exampleInputName"
                                                placeholder="Masukkan Nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Warna</label>
                                            <div class="select2-green">
                                                <select class="select2" multiple="multiple"
                                                    data-placeholder="Pilih Ukuran"
                                                    data-dropdown-css-class="select2-green" style="width: 100%;"
                                                    name="warna[]">
                                                    <option value="kuning">Kuning</option>
                                                    <option value="hijau">Hijau</option>
                                                    <option value="biru">Biru</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran</label>
                                            <div class="select2-green">
                                                <select class="select2" multiple="multiple"
                                                    data-placeholder="Pilih Ukuran"
                                                    data-dropdown-css-class="select2-green" style="width: 100%;"
                                                    name="ukuran[]">
                                                    <option value="s">S</option>
                                                    <option value="m">M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                    <option value="xxl">XXL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Produk</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                    name="foto">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer flex items-center justify-end float-right">
                                    <button type="back" class="btn btn-light"><a
                                            href="{{url('/daftarproduk')}}">Cancel</a></button>
                                    <button type="submit" class="btn btn-success ">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">bs-stepper</h3>
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
                </div>
            </section>


        </div>
    </div>


    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){       
            var s_note = $('#summernote_1');

            var summernote = s_note.summernote({
                height : 200
                , toolbar: [
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
