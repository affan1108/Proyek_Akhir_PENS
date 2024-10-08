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
                                    <b>Ekspedisi : </b><br>
                                    <br>
                                    <b>{{$ongkir->kota}}</b><br>
                                    <b>{{$ongkir->kurir}}</b><br>
                                    <a class="btn btn-primary btn-sm" href="/deleteongkir/{{$ongkir->id}}">
                                        Ganti Ekspedisi
                                    </a>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <form action="insertinvoice" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                    <!-- <th></th> -->
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
                                            @if ($data->user->id == Auth::user()->id && $data->keranjang != 1)
                                            <tbody>
                                                <tr>
                                                    <!-- <td>
                                                        <div class="icheck-primary ml-4 mt-2">
                                                            <input type="checkbox" value="{{$data->id}}"
                                                                name="checkbox[]" id="{{$data->id}}" checked>
                                                            <label for="{{$data->id}}"></label>
                                                        </div>
                                                    </td> -->
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

                                        </table>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <!-- <th>Layanan</th> -->
                                                    <th>Bill</th>
                                                    <th>Jumlah</th>
                                                    <th>Subtotal</th>
                                                    <th>Ongkir</th>
                                                    <th><b>Total</b></th>
                                                </tr>
                                            </thead>

                                            @if ($data->user->id == Auth::user()->id)
                                            <tbody>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        {{$jumlah}} produk
                                                    </td>
                                                    <td>
                                                        Rp. {{number_format($total, 0, '.' ,'.')}}
                                                    </td>
                                                    <td>
                                                        Rp. {{number_format($ongkir->ongkir, 0, '.', '.')}}
                                                    </td>
                                                    <td>
                                                        <b>
                                                            Rp. {{number_format($total + $ongkir->ongkir, 0, '.', '.')}}
                                                        </b>
                                                    </td>
                                                    <!-- <td>
                                                        <a class="btn btn-primary btn-sm"
                                                            href="/deleteongkir/{{$ongkir->id}}">
                                                            Ganti Ekspedisi
                                                        </a>
                                                    </td> -->
                                                </tr>
                                            </tbody>
                                            @endif
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="ongkir_id" value="{{$ongkir->id}}">
                                    <input type="hidden" name="keranjang_id" value="{{$data->id}}">
                                    <input type="hidden" name="warna_id" value="{{$data->warna_id}}">
                                    <input type="hidden" name="jumlah" value="{{$data->jumlah}}">
                                    <input type="hidden" name="total" value="{{$total + $ongkir->ongkir}}">
                                </div>
                                @if(Auth::user()->alamat == null && Auth::user()->nomer == null &&
                                Auth::user()->lainnya == null)
                                <button type="submit" class="btn btn-success float-right mr-2" disabled><i
                                        class="fas fa-shopping-cart"></i>
                                    <input type="hidden" name="hitung" value="hitung">
                                    Buat Pesanan
                                </button>
                                @else
                                <button type="submit" class="btn btn-success float-right mr-2"><i
                                        class="fas fa-shopping-cart"></i>
                                    <input type="hidden" name="hitung" value="hitung">
                                    Buat Pesanan
                                </button>
                                @endif
                            </form>
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
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->



                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <!-- @if(Auth::user()->alamat == null && Auth::user()->nomer == null &&
                                    Auth::user()->lainnya == null)
                                    <button type="submit" class="btn btn-success float-right mr-2" disabled><i
                                            class="fas fa-shopping-cart"></i>
                                        <input type="hidden" name="hitung" value="hitung">
                                        Buat Pesanan
                                    </button>
                                    @else
                                    <button type="submit" class="btn btn-success float-right mr-2"><i
                                            class="fas fa-shopping-cart"></i>
                                        <input type="hidden" name="hitung" value="hitung">
                                        Buat Pesanan
                                    </button>
                                    @endif -->
                                    <a href="/dashboard">
                                        <button class="btn btn-danger float-right" style="margin-right: 5px;">
                                            Batal
                                        </button>
                                    </a>
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
</body>



</html>
