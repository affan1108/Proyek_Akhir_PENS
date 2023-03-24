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
    <link href="{{asset('temp/css/styles.css')}}" rel="stylesheet" />
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{asset('estore/assets/css/default.css')}">

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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Catalog</a></li>
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
                                    <li>
                                        <a tabindex="-1" href="#" class="dropdown-item">Table Warna</a>
                                    </li>

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

                                    <li><a href="#" class="dropdown-item">Table User</a></li>
                                    <!-- <li><a href="#" class="dropdown-item">level 2</a></li> -->
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

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><small>Detail Pesanan</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pesanansaya">Pesanan Saya</a></li>
                        <li class="breadcrumb-item active">Detail Pesanan</li>
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

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <!-- <p class="lead">Pilih Ekspedisi :</p>
                                            <div class="form-group"> -->
                                <!-- <label class="control-label">Permission *</label> -->
                                <!-- <div class="select2-green">
                                                    <select class="form-control select2bs4" style="width: 100%;" name="nama">
                                                        @foreach (\App\Models\Ekspedisi::all() as $r)
                                                            <option value="{{ $r->nama }}">{{ $r->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> -->

                                <!-- </div> -->
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Billing :</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>
                                                <?php
                                                            if(isset($data->invoice->keranjang->hitung)){
                                                                $jmlh = $data->invoice->keranjang->jumlah;
                                                                $hrg = $data->invoice->keranjang->produk->harga;
                                                                $subtotal = $jmlh*$hrg;
                                                                echo "$subtotal";
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ongkir:</th>
                                            <td>
                                                {{$data->invoice->ongkir->ongkir}}
                                            </td>
                                        </tr>
                                        <tr>

                                            <th>Diskon:</th>
                                            <td>
                                                @if($data->invoice->diskon == null)
                                                0
                                                @else
                                                {{$data->invoice->diskon}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>
                                                {{$data->invoice->total}}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
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
                                <!-- <a href="/deletepesanan/{{$data->id}}">
                                                <button type="submit" class="btn btn-danger float-right"
                                                    style="margin-right: 5px;">
                                                    Batal
                                                </button>
                                            </a> -->
                                <!-- <button type="button" class="btn btn-primary float-right"
                                                style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Generate PDF
                                            </button> -->
                            </div>
                        </div>
                    </div>

                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

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

    <!-- REQUIRED SCRIPTS -->

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
                                $('#stok').append('<span>Jumlah Stok ' + value +
                                    '</span>');
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
