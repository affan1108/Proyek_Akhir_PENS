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
                                <th>Status</th>
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
                                    {{$data->ongkir->kurir}}
                                </td> -->
                                <td>
                                    @if($data->payment_id != null)
                                    @if($data->payment->status == 'settlement' ||
                                    $data->payment->status == 'capture')
                                    @if($data->payment->resi == null)
                                    <span class="badge badge-info">Dikemas</span>
                                    @elseif($data->payment->resi != null)
                                    <span class="badge badge-success">Dikirim</span>
                                    @endif
                                    @elseif($data->payment->status == 'pending')
                                    <span class="badge badge-warning">Menunggu Pembayaran</span>
                                    @endif
                                    @else
                                    <span class="badge badge-danger">Belum Dibayar</span>
                                    @endif
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
