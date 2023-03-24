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

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <!-- <img src="{{asset('assets/images/logo.png')}}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight-light">Ameliia Collection</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="/pesanansaya" class="dropdown-item">Pesanan Saya</a></li>
                                <li><a href="/penilaianpesanan" class="dropdown-item">Penilaian Pesanan</a></li>
                                <li><a href="/riwayatpesanan" class="dropdown-item">Riwayat Pesanan</a></li>

                                <!-- <li class="dropdown-divider"></li> -->

                                <!-- Level two dropdown-->
                                <!-- <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">Hover for action</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                    </ul>
                                </li> -->
                                <!-- End Level two -->
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <a href="">
                        <button class="btn btn-outline-light">
                            <i class="fas fa-user"></i>
                             {{Auth::user()->name}}
                        </button>
                    </a>
                </ul>
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
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Ameliia Collection 2023</p>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
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
