<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Riwayat Pesanan</title>

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
                            <h1 class="m-0"><small>Riwayat Pesanan</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Riwayat Pesanan</li>
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
                        <div class="card-body pb-0">
                            <div class="row">
                                @foreach($data as $row)
                                @if($row->user_id == Auth::user()->id)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            {{$row->user->name}}
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    @php
                                                    $total = App\Models\Keranjang::where('invoice_id', $row->id)->count();
                                                    @endphp
                                                    <h2 class="lead"><b>{{$total}} Produk</b></h2>
                                                    <p class="text-muted text-sm">
                                                        <b>Qty: </b>{{$row->jumlah}}
                                                        <br>
                                                        <b>Harga: </b>{{number_format($row->gross_amount, 0, '.', '.')}}
                                                    </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                            {{$row->user->alamat}}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Nomor
                                                            Telepon:
                                                            {{$row->user->nomer}}</li>
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
                                                <a href="/dashboard/katalog"
                                                    class="btn btn-sm btn-danger">
                                                    Beli Lagi
                                                </a>
                                                <div class="float-left mt-1">
                                                    @if($row->rating == '1')
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    @elseif($row->rating == '2')
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    @elseif($row->rating == '3')
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    @elseif($row->rating == '4')
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    @elseif($row->rating == '5')
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    <i class="nav-icon fas fa-star" style="color: #f9a825"></i>
                                                    @endif
                                                </div>
                                                <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#add">
                                                Nilai
                                            </button> -->
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
                                    {{$data->links()}}
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

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

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
