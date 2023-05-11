<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Daftar Produk</title>

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
                            <h1 class="m-0"><small>Add Produk</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Add Produk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    @if (session()->has('status'))
                    <div class="alert alert-success">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        {{ session()->get('status') }}
                    </div>
                    @elseif (session()->has('error'))
                    <div class="alert alert-danger">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title mt-2">Hijab</h3>
                                    <div class="card-tools">
                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button> -->
                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <a class="btn btn-success btn-sm" href="/addproduk">
                                            <i class="fas fa-plus">
                                            </i>
                                            Add
                                        </a>
                                    </div>
                                    @if(count($data))
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="hijab">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%">
                                                            #
                                                        </th>
                                                        <th style="width: 20%">
                                                            Nama
                                                        </th>
                                                        <th style="width: 30%">
                                                            Foto
                                                        </th>
                                                        <th style="width: 10%">
                                                            Harga
                                                        </th>
                                                        <!-- <th style="width: 10%">
                                                            Ukuran
                                                        </th> -->
                                                        <th style="width: 30%">
                                                            Aksi
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $row)
                                                    <tr>
                                                        <td>
                                                            #
                                                        </td>
                                                        <td>
                                                            <a>
                                                                {{$row->nama}}
                                                            </a>
                                                            <!-- <br />
                                                            <small>
                                                                Created 01.01.2019
                                                            </small> -->
                                                        </td>
                                                        <td>
                                                            <h5><img src="{{asset('assets/'.$row->foto)}}"
                                                                    alt="Foto Produk" style="width: 50px;"></h5>
                                                        </td>
                                                        <td>
                                                            {{$row->harga}}
                                                        </td>
                                                        <td class="project-actions">
                                                            <a class="btn btn-primary btn-sm" href="/view/{{$row->id}}">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-info btn-sm" href="/edit/{{$row->id}}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-danger btn-sm"
                                                                href="/deleteproduk/{{$row->id}}">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="gamis">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%">
                                                            #
                                                        </th>
                                                        <th style="width: 20%">
                                                            Kategori
                                                        </th>
                                                        <th style="width: 30%">
                                                            Jumlah Produk
                                                        </th>
                                                        <th>
                                                            Rating
                                                        </th>
                                                        <th style="width: 30%" class="text-center">
                                                            Aksi
                                                        </th>
                                                        <!-- <th style="width: 20%">
                                                        </th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            #
                                                        </td>
                                                        <td>
                                                            <a>
                                                                Gamis
                                                            </a>
                                                            <!-- <br />
                                                            <small>
                                                                Created 01.01.2019
                                                            </small> -->
                                                        </td>
                                                        <td>
                                                            <h5>100</h5>
                                                        </td>
                                                        <td>
                                                            <h5>4.9</h5>
                                                        </td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-primary btn-sm"
                                                                href="/editproduk/{{$row->id}}">
                                                                <i class="fas fa-folder">
                                                                </i>
                                                                View
                                                            </a>
                                                            <!-- <a class="btn btn-info btn-sm" href="{{url('/editproduk')}}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Edit
                                                            </a> -->
                                                            <a class="btn btn-danger btn-sm" href="#">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @else
                                    <h2 class="text-center">Data Kosong. Silahkan Isi Data Terlebih Dahulu</h2>
                                    @endif
                                </div>
                            </div>
                            <!-- Modal -->
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="alamat">
                                                    Kategori</label>
                                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                                                <input type="text" class="form-control" id="kategori" name="kategori"
                                                    placeholder="Masukkan Nama Kategori">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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

    @include('sweetalert::alert')
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

        $("document").ready(function() {
            setTimeout(() => {
                $("div.alert").remove();
            }, 3000);
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
