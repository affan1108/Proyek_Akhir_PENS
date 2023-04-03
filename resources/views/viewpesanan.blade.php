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
        @include('components.nav-bar')
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
                                    <b>Invoice ID :
                                        {{$data->invoice->keranjang->id}}{{$data->invoice->keranjang->user_id}}{{$data->invoice->keranjang->produk_id}}{{$data->invoice->keranjang->warna_id}}{{$data->invoice->keranjang->jumlah}}</b><br>
                                    <br>
                                    <b>Order ID:</b> {{$data->order_id}}<br>
                                    <!-- <b>Payment Due:</b> 2/22/2014<br> -->
                                    <!-- <b>Account:</b> AC-00{{ Auth::user()->id }} -->
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
                                                <th>#</th>
                                                <th>Qty</th>
                                                <th>Products</th>
                                                <th>Color</th>
                                                <th>Harga</th>
                                                <!-- <th>Voucher</th> -->
                                                <th>Ekspedisi</th>
                                            </tr>
                                        </thead>
                                        @if($data->user->id == Auth::user()->id)
                                        <tbody>
                                            <tr>
                                                <td>AC-00{{ Auth::user()->id }}</td>
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
                                                <!-- <td>
                                                @if($data->invoice->diskon == null)
                                                Tidak Ada Voucher
                                                @elseif($data->invoice->diskon != null)
                                                Berhasil Mendapatkan Voucher
                                                @endif
                                            </td> -->
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
                                    <div class="table-responsive mt-2">
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

                                                <!-- <th>Diskon:</th>
                                            <td>
                                                @if($data->invoice->diskon == null)
                                                0
                                                @else
                                                {{$data->invoice->diskon}}
                                                @endif
                                            </td> -->
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
        @include('components.footer')

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
