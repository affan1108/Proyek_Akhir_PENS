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
                                
                                <!-- <b>Order ID:</b> 4F3S8J<br> -->
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
                                    @foreach($rows as $data)
                                    @if($data->user->id == Auth::user()->id)
                                    <tbody>
                                        <tr>
                                            <td>AC-00{{ Auth::user()->id }}</td>
                                            <td>{{$data->jumlah}}</td>
                                            <td>{{$data->produk->nama}}</td>
                                            <td>
                                                {{$data->warna->warna}}
                                            </td>
                                            <!-- <td>{{$data->ukuran}}</td> -->
                                            <!-- <td>Rp. {{$data->harga}}</td> -->
                                            <td>
                                                {{$data->produk->harga}}
                                            </td>
                                            <!-- <td>
                                                @if($data->diskon == null)
                                                Tidak Ada Voucher
                                                @elseif($data->diskon != null)
                                                Berhasil Mendapatkan Voucher
                                                @endif
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
                            <div class="col-6">
                                <p class="lead">Billing :</p>
                                <div class="table-responsive">
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
                                <a href="/deletepesanan/{{$data->id}}">
                                    <button type="submit" class="btn btn-danger float-right" style="margin-right: 5px;">
                                        Batal
                                    </button>
                                </a>
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

    <form action="/bill" id="submit_form" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <input type="hidden" name="invoice_id" value="{{$data->id}}">
        <input type="hidden" name="warna_id" value="{{$data->warna_id}}">
        <input type="hidden" name="jumlah" value="{{$data->jumlah}}">
        <input type="hidden" name="diterima" value="0">
        <input type="hidden" name="json" id="json_callback">
    </form>

    <!-- Main Footer -->
    @include('components.footer')
    </div>
    <!-- ./wrapper -->

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
