<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection</title>

    @include('components.css')
    <link href="{{asset('temp/css/styles.css')}}" rel="stylesheet" />
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/default.css')}}">

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

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Keranjang</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Keranjang</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout-style-1">
                                <form action="/keranjangpesanan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="checkout-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox"></th>
                                                    <th class="product">Product</th>
                                                    <th class="quantity">Quantity</th>
                                                    <th class="price">Price</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $row)
                                                @if($row->user_id == Auth::user()->id)
                                                <tr>
                                                    <td>
                                                        <div class="icheck-primary ml-4 mt-2">
                                                            <input type="checkbox" value="{{$row->id}}"
                                                                name="checkbox[]" id="{{$row->id}}">
                                                            <label for="{{$row->id}}"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-cart d-flex">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('assets/'.$row->produk->foto)}}"
                                                                    alt="" width="45">
                                                            </div>
                                                            <div class="product-content media-body ml-2">
                                                                <h5 class="title"><a
                                                                        href="product-details-page.html">{{$row->produk->nama}}</a>
                                                                </h5>
                                                                <span>
                                                                    {{$row->warna->warna}} - {{$row->warna->ukuran}}
                                                                    <!-- <select class="select2bs4" name="produk_id">
                                                                    <option value="{{ $row->produk_id }}" selected
                                                                        disabled>
                                                                        {{$row->warna->warna}} - {{$row->warna->ukuran}}
                                                                    </option>
                                                                    
                                                                    @foreach (App\Models\Hijab::all() as $u)
                                                                    @if($u->id == $row->produk_id)
                                                                    <option value="{{ $u->id }}">
                                                                    {{$u}}
                                                                    </option>
                                                                    @endif
                                                                    @endforeach
                                                                </select> -->
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity d-inline-flex">
                                                            <!-- <button type="button" id="sub" class="sub"><i
                                                                class="mdi mdi-minus"></i></button> -->
                                                            <input type="text" id="stok" name="jumlah"
                                                                value="{{$row->jumlah}}">
                                                            <!-- <button type="button" id="add" class="add"><i
                                                                class="mdi mdi-plus"></i></button> -->
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price mt-2">Rp.
                                                            {{number_format($row->produk['harga'],0,'.','.')}}</p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="/editpesanan/{{$row->id}}"><i
                                                                class="mdi mdi-pencil"></i></a>
                                                        <a class="btn btn-danger" href="/deletecart/{{$row->id}}"><i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-8">
                                            <!-- <div class="checkout-coupon">
                                            <span>Apply Coupon to get discount!</span>
                                            <form action="#">
                                                <div class="single-form form-default d-flex">
                                                    <div class="form-input form">
                                                        <input type="text" placeholder="Coupon Code">
                                                    </div>
                                                    <button class="main-btn primary-btn">Apply</button>
                                                </div>
                                            </form>
                                        </div> -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <!-- <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:100%">Subtotal:</th>
                                                    <td>$250.30</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax (9.3%)</th>
                                                    <td>$10.34</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>$5.80</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>$265.24</td>
                                                </tr>
                                            </table>
                                        </div> -->
                                            <div class="checkout-btn d-sm-flex justify-content-between mb-2">
                                                <div class="single-btn">
                                                    <!-- <a href="javascript:void(0)" class="main-btn primary-btn-border">continue
                                            shopping</a> -->
                                                </div>
                                                <div class="single-btn">
                                                    <button class="main-btn primary-btn float-right mt-2"
                                                        type="submit">Pesan
                                                        Sekarang</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Footer -->
        @include('components.footer')
    </div>
    <!-- ./wrapper -->

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
