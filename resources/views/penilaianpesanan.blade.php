<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Penilaian Pesanan</title>

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
                            <h1 class="m-0"><small>Penilaian Pesanan</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Penilaian Pesanan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                <div class="container-fluid">
                        <div class="row">
                            @foreach($data as $index =>$row)
                            @if($row->payment_id == null)
                            @else
                            @if($row->payment->diterima == '1' && $row->payment->rating == null && $row->user_id == Auth::user()->id)
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
                                                    <b>Harga: </b>{{number_format($row->payment->gross_amount, 0, '.', '.')}}
                                                </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-building"></i></span> Alamat:
                                                        {{$row->user->alamat}}</li>
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-phone"></i></span> Nomor Telepon:
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
                                            <a href="/nilaipesanan/{{$row->id}}" class="btn btn-sm btn-danger">
                                                    Nilai
                                                </a>
                                            <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#add">
                                                Nilai
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
                    <!-- Modal -->
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addLabel">Nilai Pesanan</h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button> -->
                                </div>
                                <form action="/penilaian" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="payment_id" value="{{$row->id}}">
                                        <label>Rating Produk</label>
                                        <div class="row col-10">
                                            <div class="custom-control custom-radio col-2">
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                    name="rating" value="1">
                                                <label for="customRadio1" class="custom-control-label">1</label>
                                            </div>
                                            <div class="custom-control custom-radio col-2">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                    name="rating" value="2">
                                                <label for="customRadio2" class="custom-control-label">2</label>
                                            </div>
                                            <div class="custom-control custom-radio col-2">
                                                <input class="custom-control-input" type="radio" id="customRadio3"
                                                    name="rating" value="3">
                                                <label for="customRadio3" class="custom-control-label">3</label>
                                            </div>
                                            <div class="custom-control custom-radio col-2">
                                                <input class="custom-control-input" type="radio" id="customRadio4"
                                                    name="rating" value="4">
                                                <label for="customRadio4" class="custom-control-label">4</label>
                                            </div>
                                            <div class="custom-control custom-radio col-2">
                                                <input class="custom-control-input" type="radio" id="customRadio5"
                                                    name="rating" value="5">
                                                <label for="customRadio5" class="custom-control-label">5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <label>Foto Produk</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="customFile" name="foto">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <label>Deskripsi Produk</label>
                                        <!-- <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea> -->
                                        <input type="text" class="form-control" placeholder="Tulis Deskripsi"
                                            name="deskripsi">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Nilai</button>
                                    </div>
                                </form>
                            </div>
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
                                $('#stok').append('<span>Jumlah Stok '+ value +'</span>');
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

<div class="col-7">

    <!-- <div class="form-group">
                                                    <label>Nilai Produk</label>
                                                    <select class="form-control select2bs4" style="width: 100%;">
                                                        <option selected="selected">1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div> -->

</div>
