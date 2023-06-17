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
                        <h1 class="m-0"><small>Bill</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                            <li class="breadcrumb-item active">Bill</li>
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
                                        <!-- Email: {{ Auth::user()->email }} -->
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    Ekspedisi
                                    <address>
                                        <b>{{$ongkir->kota}}</b><br>
                                        {{$ongkir->kurir}}<br>
                                        <!-- <a class="btn btn-primary btn-sm" href="/deleteongkir/{{$ongkir->id}}">
                                            Ganti Ekspedisi
                                        </a> -->
                                    </address>
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
                                                <th></th>
                                                <th>#</th>
                                                <th>Qty</th>
                                                <th>Products</th>
                                                <th>Color</th>
                                                <th>Harga</th>
                                                <!-- <th>Voucher</th> -->
                                                <th>Ekspedisi</th>
                                            </tr>
                                        </thead>
                                        @php
                                        $total = 0;
                                        $jumlah = 0;
                                        @endphp
                                        @foreach (App\Models\Keranjang::all() as $r)
                                        @if($data->id == $r->invoice_id)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <form action="/bill" id="submit_form" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                        <input type="hidden" name="invoice_id" value="{{$data->id}}">
                                                        <!-- <input type="hidden" name="warna_id" value="{{$data->warna_id}}"> -->
                                                        <input type="hidden" name="jumlah" value="{{$data->jumlah}}">
                                                        <input type="hidden" name="diterima" value="0">
                                                        <input type="hidden" name="json" id="json_callback">
                                                    </form>
                                                </td>
                                                <td>AC-00{{ Auth::user()->id }}</td>
                                                <td>{{$r->jumlah}}</td>
                                                <td>{{$r->produk->nama}}</td>
                                                <td>
                                                    {{$r->warna->warna}}
                                                </td>
                                                <!-- <td>{{$data->ukuran}}</td> -->
                                                <!-- <td>Rp. {{$data->harga}}</td> -->
                                                <td>
                                                    {{$r->warna->harga}}
                                                </td>
                                                <!-- <td>
                                                @if($data->diskon == null)
                                                Tidak Ada Voucher
                                                @elseif($data->diskon != null)
                                                Berhasil Mendapatkan Voucher
                                                @endif
                                            </td> -->
                                                <td>
                                                {{$data->ongkir->kurir}}
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
                                        @php
                                        $total += $r->warna->harga * $r->jumlah;
                                        $jumlah += $r->jumlah;
                                        @endphp
                                        @endif
                                        @endforeach
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
                                <div class="col-12">
                                    <p class="lead">Billing :</p>
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
                                                <td>Rp. {{number_format($data->ongkir->ongkir, 0, '.', '.')}}</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>Rp. {{number_format($total + $data->ongkir->ongkir, 0, '.', '.')}}
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>
                                                <?php
                                                            if(isset($data->keranjang->hitung)){
                                                                $jmlh = $data->keranjang->jumlah;
                                                                $hrg = $data->keranjang->produk->harga;
                                                                $subtotal = $jmlh*$hrg;
                                                                echo "$subtotal";
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ongkir:</th>
                                            <td>
                                                {{$data->ongkir->ongkir}}
                                            </td>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>
                                                <?php
                                                            if(isset($data->keranjang->hitung)){
                                                                $jmlh = $data->keranjang->jumlah;
                                                                $hrg = $data->keranjang->produk->harga;
                                                                $ongkir = $data->ongkir->ongkir;
                                                                if($data->diskon != null){
                                                                    $vouch = $data->diskon;
                                                                    $subtotal = (($jmlh*$hrg)+$ongkir)-$vouch;
                                                                }
                                                                else
                                                                    $subtotal = (($jmlh*$hrg)+$ongkir);
                                                                    echo "$subtotal";
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                    </table> -->
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <button id="pay-button" class="btn btn-success float-right mr-2"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <a href="/dashboard">
                                        <button class="btn btn-primary float-right"
                                            style="margin-right: 5px;">
                                            Dashboard
                                        </button>
                                    </a>
                                    <a href="/pesanansaya">
                                        <button class="btn btn-danger float-right"
                                            style="margin-right: 5px;">
                                            Lihat Pesanan
                                        </button>
                                    </a>
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

        

        <!-- Main Footer -->
        @include('components.footer')
        
    </div>
    <!-- ./wrapper -->

    @include('sweetalert::alert')
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{$snapToken}}', {
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

    </script>
</body>


</html>
