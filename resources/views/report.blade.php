<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection</title>

    @include('components.css')
    <link rel="stylesheet" href="{{asset('/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
                            <h1>Inventory</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Inventory</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <!-- <h5 class="mb-2">Info Box</h5> -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>
                                <a href="/dashboard/user">
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah User</span>
                                        <span class="info-box-number">{{$user->count()}}</span>
                                    </div>
                                </a>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-cart-arrow-down"></i></span>
                                <a href="/dashboard/payment">
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Order</span>
                                        <span class="info-box-number">{{$data->count()}}</span>
                                    </div>
                                </a>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-luggage-cart"></i></span>
                                <a href="/dashboard/daftarproduk">
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Produk</span>
                                        <span class="info-box-number">{{$produk->count()}}</span>
                                    </div>
                                </a>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="far fa-star"></i></span>
                                <a href="/dashboard/daftarpenilaian">
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Penilaian</span>
                                        <span class="info-box-number">{{$data->sum('diterima')}}</span>
                                    </div>
                                </a>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title mt-2">Grafik Order</h3>
                                        <!-- <a href="javascript:void(0);">View Report</a> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <canvas id="chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title mt-2">
                                            Grafik Pendapatan
                                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#iModal"
                                                data-bs-popup="tooltip">
                                                <span>
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                            </a>
                                            <div class="modal fade" id="iModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Keterangan</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                        <ul>
                                                            <li>
                                                                @foreach($label as $x)
                                                                    Bulan : {{$x}}<br/>
                                                                @endforeach
                                                            </li>
                                                        </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center" style="position: relative; height: 255px;">
                                        <canvas id="profitChart" height="300" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <form action="/filter" method="get" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row pb-3">
                                            <div class="col-md-5 pt-4">
                                                <h3 class="card-title">Report</h3>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Start Date :</label>
                                                <input type="date" name="start_date" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>End Date :</label>
                                                <input type="date" name="end_date" class="form-control">
                                            </div>
                                            <div class="col-md-1 pt-4 mt-2">
                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Pembeli</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Total HPP</th>
                                                <th>Total Harga Beli</th>
                                                <th>Keuntungan</th>
                                                <th>%</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @php
                                        $jual = 0;
                                        $beli = 0;
                                        $untung = 0;
                                        $ongkir = 0;
                                        $hpp = 0;
                                        @endphp
                                            @foreach($data as $row)
                                            @if($row->payment_id != null)
                                            @if($row->payment->status == 'settlement' || $row->payment->status == 'capture' && $row->payment->diterima == 1)
                                            <tr>
                                                <td>
                                                    {{$row->user->name}}
                                                </td>
                                                <td>
                                                    @php
                                                    $total = App\Models\Keranjang::where('invoice_id', $row->invoice_id)->pluck('produk_id');
                                                    $items = App\Models\Hijab::whereIn('id', $total)->pluck('nama');
                                                    @endphp
                                                    @foreach($items as $item)
                                                    {{$item}},
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{$row->jumlah}}
                                                </td>
                                                <td>
                                                    {{date_format($row->created_at, 'm-d-y')}}
                                                </td>
                                                <td>
                                                    {{number_format($row->hpp, 0, '.', '.')}}
                                                </td>
                                                <td>
                                                    {{ number_format($row->payment['gross_amount'], 0, '.', '.') }}
                                                </td>
                                                <td>
                                                    {{ number_format(($row->payment['gross_amount'] - $row->hpp), 0, '.', '.')}}
                                                </td>
                                                <td>
                                                    {{ number_format(($row->payment['gross_amount'] - $row->hpp) / $row->payment['gross_amount'] * 100, 0, '.', '.')}}%
                                                    <!-- ($revenue - $expense) / $revenue * 100 -->
                                                </td>
                                            </tr>
                                            @endif
                                            @endif
                                            @endforeach
                                        </tbody>
                                        @php
                                            $color = App\Models\Keranjang::where('invoice_id', $row->invoice_id)->pluck('warna_id');
                                            $produk = App\Models\Invoice::where('payment_id', '!=', null)->sum('hpp');
                                            $jual += $produk;
                                            $beli += $row->payment->gross_amount;
                                            $hpp += $row->hpp;
                                            $untung += $beli - $hpp;
                                        @endphp
                                        <!-- <tfoot>
                                            <tr>
                                                <th>TOTAL</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-
                                                </th>
                                                <th>{{ number_format($beli, 0, '.', '.') }}
                                                </th>
                                                <th>{{ number_format( $untung, 0, '.', '.') }}
                                                </th>
                                            </tr>
                                        </tfoot> -->
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
                                    @if ($message = Session::get('status'))
                                    <div class="alert alert-success">
                                        <button class="close" type="button" data-dismiss="alert">x</button>
                                        {{ $message }}
                                    </div>
                                    @endif
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
                                                <th>Harga Jual</th>
                                                <th>Harga Beli</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kas as $value)
                                            <tr>
                                                <td>#</td>
                                                <td>{{$value->nama}}</td>
                                                <td>{{$value->harga_jual}}</td>
                                                <td>{{$value->harga_beli}}</td>
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
                                            <div class="modal fade" id="edit{{$value->id}}" tabindex="-1"
                                                aria-labelledby="addLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addLabel">Edit Data</h5>
                                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button> -->
                                                        </div>
                                                        <form action="/updatekas/{{$value->id}}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @method('POST')
                                                            @csrf
                                                            <div class="modal-body">
                                                                <label for="nama">Saldo</label>
                                                                <input type="text" class="form-control" id="nama"
                                                                    name="nama" placeholder="Nama Barang"
                                                                    value="{{ number_format( $untung, 0, '.', '.') }}"
                                                                    disabled>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="nama">Nama Barang</label>
                                                                <input type="text" class="form-control" id="nama"
                                                                    name="nama" placeholder="Nama Barang"
                                                                    value="{{$value->nama}}">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="harga_jual">Harga Jual</label>
                                                                <input type="text" class="form-control" id="harga_jual"
                                                                    name="harga_jual" placeholder="Harga Jual"
                                                                    value="{{$value->harga_jual}}">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="harga_beli">Harga Beli</label>
                                                                <input type="text" class="form-control" id="harga_beli"
                                                                    name="harga_beli" placeholder="Harga beli"
                                                                    value="{{$value->harga_beli}}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>TOTAL</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>{{ number_format($value->pluck('harga_beli')->sum(), 0, '.', '.')}}
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
                                            <!-- <tr>
                                                <td>1.</td>
                                                <td>Total Harga Jual</td>
                                                <td>
                                                    {{ number_format($jual, 0, '.', '.')}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Total Harga Beli</td>
                                                <td>
                                                    {{ number_format($beli, 0, '.', '.') }}
                                                </td>
                                            </tr> -->
                                            <tr>
                                                <td>3.</td>
                                                <td>Total Keuntungan</td>
                                                <td>
                                                    {{ number_format($untung, 0, '.', '.') }}
                                                </td>
                                                <!-- <td><span class="badge bg-danger">55%</span></td> -->
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Total Pengeluaran</td>
                                                <td>
                                                    {{ number_format($value->pluck('harga_beli')->sum(), 0, '.', '.')}}
                                                </td>
                                                <!-- <td><span class="badge bg-danger">55%</span></td> -->
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sisa Saldo</th>
                                                <th>-</th>
                                                <th>{{ number_format( $untung - $value->pluck('harga_beli')->sum(), 0, '.', '.') }}
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
                            <label for="nama">Saldo</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang"
                                value="{{ number_format($untung, 0, '.', '.') }}"
                                disabled>
                        </div>
                        <div class="modal-body">
                            <label for="nama">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
                        </div>
                        <div class="modal-body">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="text" class="form-control" id="harga_jual" name="harga_jual"
                                placeholder="Harga Jual">
                        </div>
                        <div class="modal-body">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="text" class="form-control" id="harga_beli" name="harga_beli"
                                placeholder="Harga beli">
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
    <script src="{{asset('/template/plugins/jquery/jquery.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/template/dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('/template/js/scripts.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('/template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/template/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('/template/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('/template/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Page specific script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var monthlyProfits = @json($monthlyProfits);
            var labels = Object.keys(monthlyProfits);
            var values = Object.values(monthlyProfits);
            
            var ctx = document.getElementById('profitChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: {!!json_encode($label) !!},
                    datasets: [{
                        data: monthlyProfits.map(data => data.total_profit),
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
        });
    </script>
    <script>
        var ctx = document.getElementById('chart').getContext('2d');
        var orderChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!!json_encode($labels) !!},
                datasets: {!!json_encode($datasets) !!}
            },
        });

        
    </script>
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
