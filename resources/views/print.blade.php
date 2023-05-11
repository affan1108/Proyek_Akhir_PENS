<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Invoice Print</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
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
                                <td>
                                    {{$data->invoice->ongkir->kurir}}
                                </td>
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
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());

    </script>
</body>

</html>
