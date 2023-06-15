<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Daftar Pesanan</title>

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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><small>Daftar Pesanan</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Daftar Pesanan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="card card-solid">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Order Masuk</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool mt-auto" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row">
                                @foreach($data as $row)
                                @if($row->payment_id == null)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            {{$row->user->name}}
                                        </div>
                                        <div class="card-body pt-0 mt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    @php
                                                    $total = App\Models\Keranjang::where('invoice_id', $row->id)->count();
                                                    @endphp
                                                    <h2 class="lead"><b>{{$total}} Produk</b></h2>
                                                    <p class="text-muted text-sm">
                                                        <!-- <b>Warna: </b>
                                                        <br>
                                                        <b>Ukuran: </b>
                                                        <br> -->
                                                        <b>Qty: </b>{{$row->jumlah}}
                                                        <br>
                                                        <b>Harga: </b>{{$row->total}}
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                            {{$row->user->alamat}}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Nomor
                                                            Telepon: {{$row->user->nomer}}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    @php
                                                    $foto = App\Models\Keranjang::where('invoice_id', $row->id)->first();
                                                    @endphp
                                                    <img src="{{asset('assets/'. $foto->produk->foto)}}"
                                                        alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <!-- <a href="#" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-comments"></i>
                                                </a> -->
                                                @if($row->payment_id != null)
                                                @if($row->payment->status == 'capture' || $row->payment->status ==
                                                'settlement')
                                                <a href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}"
                                                    class="btn btn-sm btn-success">
                                                    Lihat Pesanan
                                                </a>
                                                @elseif($row->payment->status == 'pending')
                                                <a href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}"
                                                    class="btn btn-sm btn-warning">
                                                    Lihat Pesanan
                                                </a>
                                                @endif
                                                @else
                                                <a href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}"
                                                    class="btn btn-sm btn-danger">
                                                    Lihat Pesanan
                                                </a>
                                                @endif
                                                <!-- <button type="button" class="btn btn-danger">
                                                    Lihat Pesanan
                                                </button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @if($row->payment->diterima == 0 && $row->deleted_at == null && $row->payment->resi == null)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            {{$row->user->name}}
                                        </div>
                                        <div class="card-body pt-0 mt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    @php
                                                    $total = App\Models\Keranjang::where('invoice_id', $row->id)->count();
                                                    @endphp
                                                    <h2 class="lead"><b>{{$total}} Produk</b></h2>
                                                    <p class="text-muted text-sm">
                                                        <!-- <b>Warna: </b>
                                                        <br>
                                                        <b>Ukuran: </b>
                                                        <br> -->
                                                        <b>Qty: </b>{{$row->jumlah}}
                                                        <br>
                                                        <b>Harga: </b>{{$row->total}}
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                            {{$row->user->alamat}}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Nomor
                                                            Telepon: {{$row->user->nomer}}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    @php
                                                    $foto = App\Models\Keranjang::where('invoice_id', $row->id)->first();
                                                    @endphp
                                                    <img src="{{asset('assets/'. $foto->produk->foto)}}"
                                                        alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <!-- <a href="#" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-comments"></i>
                                                </a> -->
                                                @if($row->payment_id != null)
                                                @if($row->payment->status == 'capture' || $row->payment->status ==
                                                'settlement')
                                                <a href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}"
                                                    class="btn btn-sm btn-success">
                                                    Lihat Pesanan
                                                </a>
                                                @elseif($row->payment->status == 'pending')
                                                <a href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}"
                                                    class="btn btn-sm btn-warning">
                                                    Lihat Pesanan
                                                </a>
                                                @endif
                                                @else
                                                <a href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}"
                                                    class="btn btn-sm btn-danger">
                                                    Lihat Pesanan
                                                </a>
                                                @endif
                                                <!-- <button type="button" class="btn btn-danger">
                                                    Lihat Pesanan
                                                </button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                                <ul class="pagination justify-content-center m-0">
                                    {{$data->links()}}
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="card card-solid">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Order Dibatalkan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool mt-auto" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row">
                                @foreach($items as $item)
                                @if($item->deleted_at != null)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            {{$item->user->name}}
                                        </div>
                                        <div class="card-body pt-0 mt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    @php
                                                    $total = App\Models\Keranjang::where('invoice_id', $item->id)->count();
                                                    @endphp
                                                    <h2 class="lead"><b>{{$total}} produk</b></h2>
                                                    <p class="text-muted text-sm">
                                                        <!-- <b>Warna: </b>{{$item->keranjang_id}}
                                                        <br>
                                                        <b>Ukuran: </b>{{$item->keranjang_id}}
                                                        <br> -->
                                                        <b>Qty: </b>{{$item->jumlah}}
                                                        <br>
                                                        <b>Harga: </b>{{$item->total}}
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                            {{$item->user->alamat}}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Nomor
                                                            Telepon: {{$item->user->nomer}}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    @php
                                                    $foto = App\Models\Keranjang::where('invoice_id', $row->id)->first();
                                                    @endphp
                                                    <img src="{{asset('assets/'. $foto->produk->foto)}}"
                                                        alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                                <ul class="pagination justify-content-center m-0">
                                    {{$items->links()}}
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="card card-solid">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Order Sukses</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool mt-auto" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row">
                                @foreach($data as $item)
                                @if($item->payment_id != null)
                                @if($item->payment->diterima != null)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            {{$item->user->name}}
                                        </div>
                                        <div class="card-body pt-0 mt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    @php
                                                    $total = App\Models\Keranjang::where('invoice_id', $item->id)->count();
                                                    @endphp
                                                    <h2 class="lead"><b>{{$total}} produk</b></h2>
                                                    <p class="text-muted text-sm">
                                                        <!-- <b>Warna: </b>{{$item->keranjang_id}}
                                                        <br>
                                                        <b>Ukuran: </b>{{$item->keranjang_id}}
                                                        <br> -->
                                                        <b>Qty: </b>{{$item->jumlah}}
                                                        <br>
                                                        <b>Harga: </b>{{$item->total}}
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                            {{$item->user->alamat}}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Nomor
                                                            Telepon: {{$item->user->nomer}}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    @php
                                                    $foto = App\Models\Keranjang::where('invoice_id', $row->id)->first();
                                                    @endphp
                                                    <img src="{{asset('assets/'. $foto->produk->foto)}}"
                                                        alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                                <ul class="pagination justify-content-center m-0">
                                    {{$items->links()}}
                                </ul>
                            </nav>
                        </div>

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

    <!-- jQuery -->
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
