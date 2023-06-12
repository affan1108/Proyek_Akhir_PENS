<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Invoice</title>

    @include('components.css')
    <link href="{{asset('temp/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('template/dist/css/rating.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/slick.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/style.css')}}">

    <!--====== Jquery Ui CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/jquery-ui.min.css')}}">

    <!--====== nice select CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/nice-select.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/bootstrap.min.css')}}">

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
                                        Ekspedisi
                                        <address>
                                            <!-- <b>{{$data->ongkir->kota}}</b><br> -->

                                            <b>{{$data->ongkir->kurir}}</b><br>
                                            @foreach($pay as $x)
                                            @if($x->id == $data->payment_id)
                                            Order ID: {{$x->order_id}}<br>
                                            Payment Code: {{$x->payment_code}} <br>
                                            @endif
                                            @endforeach
                                            Tanggal Pemesanan: {{date_format($data->created_at, 'h:i:s, d-m-y') }}
                                            <!-- <b>Account:</b> AC-00{{ Auth::user()->id }} -->

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
                                                    <th>#</th>
                                                    <th>Qty</th>
                                                    <th>Products</th>
                                                    <th>Color</th>
                                                    <th>Harga</th>
                                                    <!-- <th>Voucher</th> -->
                                                    <th>Ekspedisi</th>
                                                </tr>
                                            </thead>
                                            @foreach (App\Models\Keranjang::all() as $r)
                                            @if($data->id == $r->invoice_id)
                                            @if($data->user->id == Auth::user()->id)
                                            <tbody>
                                                <tr>
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
                                            @endif
                                            @endif
                                            @endforeach
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <!-- accepted payments column -->
                                    <!-- <div class="col-6">
                                        <p class="lead">Payment Methods:</p>
                                        <img src="../../dist/img/credit/visa.png" alt="Visa">
                                        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                        <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                        <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning
                                            heekya handango imeem
                                            plugg
                                            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                        </p>
                                    </div> -->
                                    <!-- /.col -->
                                    <div class="col-12">
                                        <p class="lead">Nilai Produk :</p>
                                        <form action="/penilaian/{{$data->id}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div class="form-group">
                                                <!-- <label>Rating Produk</label> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="rating" checked
                                                            id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-form">
                                                <div class="single-form form-default">
                                                    <!-- <label>Write your Review</label> -->
                                                    <div class="form-input">
                                                        <textarea placeholder="Your review here"
                                                            name="deskripsi"></textarea>
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="single-rating-form flex-wrap">
                                                    <div class="rating-form-file">
                                                        <div class="file">
                                                            <input type="file" id="customFile" name="foto" accept=".png,.jpg,.jpeg">
                                                            <label for="customFile"></label>
                                                        </div>
                                                    </div>
                                                    <div class="rating-form-btn float-right mr-2 mt-1">
                                                        <button type="submit" class="main-btn primary-btn">write
                                                            a Review</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- <button type="submit" class="btn btn-danger float-right mr-2">Nilai</button> -->
                                    </div>
                                    <!-- /.col -->
                                </div>
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

        <!-- Main Footer -->
        @include('components.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!--====== Bootstrap 5 js ======-->
    <script src="{{asset('estore/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('estore/assets/js/bootstrap.min.js')}}"></script>


    <!--====== Jquery js ======-->
    <script src="{{asset('estore/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('estore/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('estore/assets/js/slick.min.js')}}"></script>

    <!--====== Accordion Steps Form js ======-->
    <script src="{{asset('estore/assets/js/jquery-vj-accordion-steps.js')}}"></script>

    <!--====== Jquery Ui js ======-->
    <script src="{{asset('estore/assets/js/jquery-ui.min.js')}}"></script>

    <!--====== Form validator js ======-->
    <script src="{{asset('estore/assets/js/jquery.form-validator.min.js')}}"></script>

    <!--====== nice select js ======-->
    <script src="{{asset('estore/assets/js/jquery.nice-select.min.js')}}"></script>

    <!--====== formatter js ======-->
    <script src="{{asset('estore/assets/js/jquery.formatter.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('estore/assets/js/count-up.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('estore/assets/js/main.js')}}"></script>
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
