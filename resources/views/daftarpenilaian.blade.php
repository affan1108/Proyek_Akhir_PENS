<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Daftar Penilaian</title>

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
                            <h1 class="m-0"><small>Daftar Penilaian</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Daftar Penilaian</li>
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
                            <div class="col-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h3 class="card-title">Expandable Table</h3>
                                    </div> -->
                                    <!-- ./card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Nama Pembeli</th>
                                                    <th>Jumlah</th>
                                                    <th>Warna - Ukuran</th>
                                                    <th>Harga</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $row)
                                                @php
                                                $total = App\Models\Keranjang::where('invoice_id', $row->id)->count();
                                                @endphp
                                                @if($row->rating != null)
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td>{{$total}} Produk</td>
                                                    <td>{{$row->user->name}}</td>
                                                    <td>{{$row->jumlah}}</td>
                                                    <td>{{$row->invoice->ongkir->kurir}}</td>
                                                    <td>{{$row->invoice->total}}</td>
                                                    <td>{{$row->user->alamat}}</td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="6">
                                                        <div class="col-7">
                                                            <div class="form-group">
                                                                <label>Nilai Produk</label>
                                                                <div class="row col-10">
                                                                    <div class="custom-control custom-radio col-5">
                                                                        @if($row->rating == '1')
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        @elseif($row->rating == '2')
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        @elseif($row->rating == '3')
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        @elseif($row->rating == '4')
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        @elseif($row->rating == '5')
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        <i class="nav-icon fas fa-star"
                                                                            style="color: yellow"></i>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-6 mt-2 product-image-thumbs">
                                                                    <div class="product-image-thumb active"><img
                                                                            src="{{asset('assets/'.$row->foto)}}"
                                                                            alt="Product Image"></div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3"
                                                                    placeholder="Deskripsi" disabled
                                                                    style="resize:none;">{{$row->deskripsi}}</textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <div>
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
