<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Invoice</title>

    @include('components.css')
    <link href="temp/css/styles.css" rel="stylesheet" />
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
        @include('components.nav-bar')
        <!-- /.navbar -->

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><small>Invoice</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                            <li class="breadcrumb-item">Detail Hijab</li>
                            <li class="breadcrumb-item active">Invoice</li>
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
                        @if(Auth::user()->alamat == null && Auth::user()->nomer == null && Auth::user()->lainnya ==
                        null)
                        <div class="callout callout-info">
                            <h5><i class="fas fa-info"></i> Note:</h5>
                            Silahkan Melengkapi Profil Anda Terlebih Dahulu Agar Dapat Membuat Pesanan
                        </div>
                        @endif

                        <!-- Main content -->

                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <img src="assets/images/logo.png" alt="user-avatar"
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
                                        <a class="btn btn-primary btn-sm" href="/profile">
                                            Edit Alamat
                                        </a>
                                        <!-- @if( Auth::user()->alamat == null && Auth::user()->lainnya == null && Auth::user()->nomer )
                                                <a class="btn btn-warning btn-sm" href="/profile">
                                                    Profile
                                                </a> -->
                                        <!-- @elseif( Auth::user()->alamat != null && Auth::user()->lainnya != null && Auth::user()->nomer ) -->

                                        <!-- @endif -->
                                        <!-- Email: {{ Auth::user()->email }} -->
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    Ekspedisi
                                    <address>
                                        <b>{{$ongkir->kota}}</b><br>
                                        {{$ongkir->kurir}}<br>
                                        <a class="btn btn-primary btn-sm" href="/deleteongkir/{{$ongkir->id}}">
                                            Ganti Ekspedisi
                                        </a>
                                    </address>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <form action="insertinvoicecart" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Qty</th>
                                                    <th>Products</th>
                                                    <th>Color</th>
                                                    <th>Harga</th>
                                                    <th>Aksi</th>
                                                    <!-- <th>Edit</th> -->
                                                    <!-- <th>Aksi</th> -->
                                                </tr>
                                            </thead>
                                            @php
                                            $total = 0;
                                            $jumlah = 0;
                                            @endphp
                                            @foreach($rows as $data)
                                            @if ($data->user->id == Auth::user()->id && $data->keranjang == 1 && $data->payment != 1)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="icheck-primary ml-4 mt-2">
                                                            <input type="checkbox" value="{{$data->id}}"
                                                                name="checkbox[]" id="{{$data->id}}" checked>
                                                            <label for="{{$data->id}}"></label>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{asset('assets/'.$data->produk->foto)}}"
                                                            alt="Foto Produk" width="50"></td>
                                                    <td>
                                                        <div class="mt-2">{{$data->jumlah}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="mt-2">{{$data->produk->nama}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="mt-2">{{$data->warna->warna}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="mt-2">{{$data->produk->harga}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="mt-2"><a class="btn btn-danger btn-sm"
                                                                href="/invoice/cart/delete/{{$data->id}}">
                                                                <i class="fas fa-trash"></i>
                                                            </a></div>
                                                    </td>
                                                    <!-- <td>
                                                    {{$ongkir->kota}}
                                                    </td> -->
                                                    <!-- <td>
                                                    @if($data->voucher_id == null)
                                                    <a class="btn btn-warning btn-sm" href="/editinvoice/{{$data->id}}">
                                                        Tambahkan
                                                    </a>
                                                    @elseif($data->voucher_id != null)
                                                    {{$data->voucher->harga}}
                                                    @endif
                                                </td> -->
                                                    <!-- <td>
                                                    {{ $data->warna->stok - $data->jumlah}}
                                                </td> -->
                                                    <!-- <td>
                                                            Berhasil Menambahkan Ekspedisi
                                                            <a class="btn btn-primary btn-sm" href="/home">
                                                                <i class="fas fa-truck"></i>
                                                            </a>
                                                        </td> -->
                                                    <!-- <td>
                                                            <a class="btn btn-danger btn-sm" href="/editpesanan/{{$data->id}}">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td> -->
                                                </tr>
                                                <!-- <tr>
                                                        <td>1</td>
                                                        <td>Hijab</td>
                                                        <td>Red</td>
                                                        <td>L</td>
                                                        <td>Rp. 9.000</td>
                                                    </tr> -->
                                            </tbody>
                                            @php
                                            $total += $data->produk->harga * $data->jumlah;
                                            $jumlah += $data->jumlah;
                                            @endphp
                                            @endif
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <p class="lead mb-2">Billing :</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>Rp. {{number_format($total, 0, '.' ,'.')}}</td>
                                                </tr>
                                                <!-- <tr>
                                                    <th>Tax (9.3%)</th>
                                                    <td>$10.34</td>
                                                </tr> -->
                                                <tr>
                                                    <th>Ongkir:</th>
                                                    <td>Rp. {{number_format($ongkir->ongkir, 0, '.', '.')}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>Rp. {{number_format($total + $ongkir->ongkir, 0, '.', '.')}}
                                                    </td>
                                                </tr>
                                            </table>
                                            <a href="/dashboard">
                                                <button class="btn btn-danger float-left" style="margin-right: 5px;">
                                                    Batal
                                                </button>
                                            </a>
                                            @if(Auth::user()->alamat == null && Auth::user()->nomer == null &&
                                            Auth::user()->lainnya == null)
                                            <button type="submit" class="btn btn-success float-right mr-2" disabled><i
                                                    class="fas fa-shopping-cart"></i>
                                                <input type="hidden" name="hitung" value="hitung">
                                                Buat Pesanan
                                            </button>
                                            @else
                                            <button type="submit" class="btn btn-success float-right mr-2"><i
                                                    class="far fa-credit-card"></i>
                                                <input type="hidden" name="hitung" value="hitung">
                                                Buat Pesanan
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="hidden" name="id" value="1"> -->
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="ongkir_id" value="{{$ongkir->id}}">
                                        <input type="hidden" name="keranjang_id" value="{{$data->id}}">
                                        <input type="hidden" name="warna_id" value="{{$data->warna_id}}">
                                        <input type="hidden" name="jumlah" value="{{$data->jumlah}}">
                                        <input type="hidden" name="total" value="{{$total + $ongkir->ongkir}}">

                                    </div>
                                </div>
                            </form>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <!-- <div class="row no-print">
                                <div class="col-12">
                                    <a href="/dashboard">
                                        <button class="btn btn-danger float-right" style="margin-right: 5px;">
                                            Batal
                                        </button>
                                    </a>
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

        <!-- <form action="/insertinvoicecart" id="submit_form" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="invoice_id" value="{{$data->id}}">
            <input type="hidden" name="warna_id" value="{{$data->warna_id}}">
            <input type="hidden" name="jumlah" value="{{$data->jumlah}}">
            <input type="hidden" name="diterima" value="0">
            <input type="hidden" name="json" id="json_callback">
        </form> -->

        <!-- Main Footer -->
        @include('components.footer')

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
        <!--====== Main js ======-->
        <script src="{{asset('estore/assets/js/count-up.min.js')}}"></script>

        <!--====== Main js ======-->
        <script src="{{asset('estore/assets/js/main.js')}}"></script>

        <!-- <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('', {
                    onSuccess: function (result) {
                        /* You may add your own implementation here */
                        // alert("payment success!"); console.log(result);
                        send_response_to_form(result);
                    },
                    onPending: function (result) {
                        /* You may add your own implementation here */
                        // alert("wating your payment!"); console.log(result);
                        send_response_to_form(result);
                    },
                    onError: function (result) {
                        /* You may add your own implementation here */
                        // alert("payment failed!"); console.log(result);
                        send_response_to_form(result);
                    },
                    onClose: function () {
                        /* You may add your own implementation here */
                        alert('you closed the popup without finishing the payment');
                    }
                })
            });

            function send_response_to_form(result) {
                document.getElementById('json_callback').value = JSON.stringify(result);
                // document.getElementById('user').value = JSON.stringify(result);
                // document.getElementById('invoice').value = JSON.stringify(result);
                $('#submit_form').submit();
            }

        </script> -->
</body>
