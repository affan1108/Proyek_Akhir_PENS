<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="shortcut icon" href="assets/images/logo2.png">
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Report</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Report</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Report</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Pembeli</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Harga Jual</th>
                                                <th>Harga Beli</th>
                                                <th>Keuntungan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            @if($row->status == 'capture' || $row->status == 'settlement')
                                            <tr>
                                                <td>
                                                    {{$row->user->name}}
                                                </td>
                                                <td>
                                                    {{$row->invoice->keranjang->produk->nama}}
                                                </td>
                                                <td>
                                                    {{$row->invoice->keranjang->jumlah}}
                                                </td>
                                                <td>
                                                    {{ number_format($row->invoice->keranjang->produk['harga'], 0, '.', '.')}}
                                                </td>
                                                <td>
                                                    {{ number_format($row['gross_amount'], 0, '.', '.') }}
                                                </td>
                                                <td>
                                                    {{ number_format($row['gross_amount'] - $row->invoice->keranjang->produk['harga'], 0, '.', '.')}}
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>TOTAL</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>{{ number_format($row->invoice->keranjang->produk->pluck('harga')->sum(), 0, '.', '.')}}
                                                </th>
                                                <th>{{ number_format($data->pluck('gross_amount')->sum(), 0, '.', '.') }}
                                                </th>
                                                <th>{{ number_format( $data->pluck('gross_amount')->sum() - $row->invoice->keranjang->produk->pluck('harga')->sum(), 0, '.', '.') }}
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mt-1">Kas</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-sm btn-success ml-2" data-bs-toggle="modal"
                                            data-bs-target="#add">
                                            Add
                                        </button>
                                        <!-- <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right"
                                                    placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Harga</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kas as $value)
                                            <tr>
                                                <td>#</td>
                                                <td>{{$value->nama}}</td>
                                                <td>{{$value->harga}}</td>
                                                <td>{{ date_format($value['created_at'], 'd-m-y')}}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit{{$value->id}}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="/deletekas/{{$value->id}}">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>TOTAL</th>
                                                <th>-</th>
                                                <th>{{ number_format($value->pluck('harga')->sum(), 0, '.', '.')}}
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mt-1">Sisa Saldo</h3>
                                    <!-- <div class="card-tools">
                                        <ul class="pagination pagination-sm float-right">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Laba</th>
                                                <th>Total</th>
                                                <!-- <th style="width: 40px">Label</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Total Harga Jual</td>
                                                <td>
                                                    {{ number_format($row->invoice->keranjang->produk->pluck('harga')->sum(), 0, '.', '.')}}
                                                </td>
                                                <!-- <td><span class="badge bg-danger">55%</span></td> -->
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Total Harga Beli</td>
                                                <td>
                                                    {{ number_format($data->pluck('gross_amount')->sum(), 0, '.', '.') }}
                                                </td>
                                                <!-- <td><span class="badge bg-danger">55%</span></td> -->
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Total Keuntungan</td>
                                                <td>
                                                    {{ number_format( $data->pluck('gross_amount')->sum() - $row->invoice->keranjang->produk->pluck('harga')->sum(), 0, '.', '.') }}
                                                </td>
                                                <!-- <td><span class="badge bg-danger">55%</span></td> -->
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Total Pengeluaran</td>
                                                <td>
                                                    {{ number_format($value->pluck('harga')->sum(), 0, '.', '.')}}
                                                </td>
                                                <!-- <td><span class="badge bg-danger">55%</span></td> -->
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sisa Saldo</th>
                                                <th>-</th>
                                                <th>{{ number_format(( $data->pluck('gross_amount')->sum() - $row->invoice->keranjang->produk->pluck('harga')->sum()) - $value->pluck('harga')->sum(), 0, '.', '.') }}
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <div class="modal fade" id="edit{{$value->id}}" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLabel">Edit Data</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button> -->
                    </div>
                    <form action="/updatekas/{{$value->id}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="modal-body">
                            <label for="nama">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="{{$value->nama}}">
                        </div>
                        <div class="modal-body">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{$value->harga}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLabel">Tambah Data</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button> -->
                    </div>
                    <form action="/kas" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <label for="nama">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
                        </div>
                        <div class="modal-body">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
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
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
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
