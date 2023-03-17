<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Invoice</title>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-eRKc-5TTAg2SgIgy">
    </script>
    @include('components.css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
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
                <img src="{{asset('assets/images/logo2.png')}}" alt="Logo Ameliia Collection"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="d-block"> Ameliia Collection</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets/images/user.png')}}" class="img-circle elevation-2" alt="User Image">
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
                        <li class="nav-item">
                            <a href="{{url('/dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if(auth()->user()->name=="admin")
                        <li class="nav-header"><strong>USER</strong></li>
                        @endif
                        <li class="nav-item">
                            <a href="{{url('/pesanansaya')}}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    @if(App\Models\Payment::all()->count() == 0)
                                        Pesanan Saya
                                    @else
                                        Pesanan Saya
                                        <span class="badge badge-success right">
                                        <?php
                                            $notif = App\Models\Payment::where('diterima', '0')->count();
                                            echo $notif;
                                        ?>
                                        </span>
                                    @endif
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
                        <li class="nav-item bg-success">
                            <a href="{{url('/penilaianpesanan')}}" class="nav-link bg-success-active">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                        Penilaian Pesanan
                                        <span class="badge badge-success right">
                                        <?php
                                            $notif = App\Models\Payment::where('diterima', '1')->count();
                                            echo $notif;
                                        ?>
                                        </span>
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
                                    <span class="badge badge-success right">
                                    <?php
                                        $notif = App\Models\Payment::where('diterima', '0')->count();
                                        echo $notif;
                                    ?>
                                    </span>
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
                                    @if(App\Models\Payment::where('diterima', '0')->count())
                                        Daftar Penilaian 
                                    @else
                                        Daftar Penilaian
                                        <span class="badge badge-success right">
                                        <?php
                                            $notif = App\Models\Payment::whereNotNull('rating')->count();
                                            echo $notif;
                                        ?>
                                        </span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/home')}}" class="nav-link">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>
                                    Cek Ongkir
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="{{url('/hijab')}}">Hijab</a></li> -->
                                <!-- <li class="breadcrumb-item"><a href="{{url('/detailhijab')}}">Detail Hijab</a></li> -->
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the
                                invoice to test.
                            </div> -->


                            <!-- Main content -->
                            @csrf
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <img src="{{asset('assets/images/logo.png')}}" alt="user-avatar"
                                                class="img-circle img-fluid col-1">Ameliia Collection
                                            <!-- <small class="float-right">Date: 2/10/2014</small> -->
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        Asal
                                        <address>
                                            <strong>Ameliia Collection</strong><br>
                                            Jl. Gili Raja III/04 Perumnas Giling<br>
                                            Kabupaten Sumenep<br>
                                            Phone: **********<br>
                                            <!-- Email: **********.com -->
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        Tujuan
                                        <address>
                                            <strong>{{ Auth::user()->name }}</strong><br>
                                            {{ Auth::user()->alamat }}<br>
                                            {{ Auth::user()->lainnya }}<br>
                                            Phone: {{ Auth::user()->nomer }}<br>
                                            <!-- Email: {{ Auth::user()->email }} -->
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #007612</b><br>
                                        <br>
                                        <b>Order ID:</b> {{$data->order_id}}<br>
                                        <!-- <b>Payment Due:</b> 2/22/2014<br> -->
                                        <b>Account:</b> AC-00{{ Auth::user()->id }}
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Qty</th>
                                                        <th>Products</th>
                                                        <th>Color</th>
                                                        <th>Harga</th>
                                                        <th>Voucher</th>
                                                        <th>Ekspedisi</th>
                                                    </tr>
                                                </thead>
                                                    @if($data->user->id == Auth::user()->id)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$data->invoice->keranjang->jumlah}}</td>
                                                            <td>{{$data->invoice->keranjang->produk->nama}}</td>
                                                            <td>
                                                                {{$data->invoice->keranjang->warna->warna}}
                                                            </td>
                                                            <!-- <td>{{$data->ukuran}}</td> -->
                                                            <!-- <td>Rp. {{$data->harga}}</td> -->
                                                            <td>
                                                                {{$data->invoice->keranjang->produk->harga}}
                                                            </td>
                                                            <td>
                                                                @if($data->invoice->diskon == null)
                                                                Tidak Ada Voucher
                                                                @elseif($data->invoice->diskon != null)
                                                                Berhasil Mendapatkan Voucher
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{$data->invoice->ongkir->kurir}}
                                                            </td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <td>1</td>
                                                            <td>Hijab</td>
                                                            <td>Red</td>
                                                            <td>L</td>
                                                            <td>Rp. 9.000</td>
                                                        </tr> -->
                                                    </tbody>
                                                    @endif
                                            </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <form action="/penilaian/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    @method('POST')
                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-6">
                                        <!-- <p class="lead">Nilai Produk :</p>
                                        <div class="form-group">
                                            
                                        </div> -->
                                    </div>
                                    <!-- /.col -->
                                    
                                        <div class="col-6">
                                            <p class="lead">Nilai Produk :</p>
                                            <div class="form-group">
                                                <label>Rating Produk</label>
                                                <div class="row col-10">
                                                    <div class="custom-control custom-radio col-2">
                                                        <input class="custom-control-input" type="radio"
                                                            id="customRadio1" name="rating" value="1">
                                                        <label for="customRadio1" class="custom-control-label">1</label>
                                                    </div>
                                                    <div class="custom-control custom-radio col-2">
                                                        <input class="custom-control-input" type="radio"
                                                            id="customRadio2" name="rating" value="2">
                                                        <label for="customRadio2" class="custom-control-label">2</label>
                                                    </div>
                                                    <div class="custom-control custom-radio col-2">
                                                        <input class="custom-control-input" type="radio"
                                                            id="customRadio3" name="rating" value="3">
                                                        <label for="customRadio3" class="custom-control-label">3</label>
                                                    </div>
                                                    <div class="custom-control custom-radio col-2">
                                                        <input class="custom-control-input" type="radio"
                                                            id="customRadio4" name="rating" value="4">
                                                        <label for="customRadio4" class="custom-control-label">4</label>
                                                    </div>
                                                    <div class="custom-control custom-radio col-2">
                                                        <input class="custom-control-input" type="radio"
                                                            id="customRadio5" name="rating" value="5">
                                                        <label for="customRadio5" class="custom-control-label">5</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto Produk</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control" id="customFile"
                                                            name="foto">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi Produk</label>
                                                <!-- <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea> -->
                                                <input type="text" class="form-control" placeholder="Tulis Deskripsi"
                                                    name="deskripsi">
                                            </div>
                                            <button type="submit" class="btn btn-danger float-right mr-2">Nilai</button>
                                        </div>
                                        
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                </form>
                                <!-- this row will not appear when printing -->
                                <!-- <div class="row no-print">
                                    <div class="col-12">
                                        <form action="/pesananditerima/{{$data->id}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="diterima" value="1">
                                            @if($data->status == 'pending')
                                            <button type="submit" class="btn btn-primary float-right mr-2" disabled>
                                                Pesanan Diterima
                                            </button>
                                            @else
                                            <button type="submit" class="btn btn-primary float-right mr-2">
                                                Pesanan Diterima
                                            </button>
                                            @endif
                                        </form>
                                        <a href="/deletepesanan/{{$data->id}}">
                                                <button type="submit" class="btn btn-danger float-right"
                                                    style="margin-right: 5px;">
                                                    Batal
                                                </button>
                                            </a>
                                        <button type="button" class="btn btn-primary float-right"
                                                style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Generate PDF
                                            </button>
                                    </div>
                                </div> -->
                            </div>

                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- <form action="/bill" id="submit_form" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="invoice_id" value="{{$data->id}}">
            <input type="hidden" name="diterima" value="0">
            <input type="hidden" name="json" id="json_callback">
        </form> -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">Ameliia Collection</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('components.script')

</body>

</html>
