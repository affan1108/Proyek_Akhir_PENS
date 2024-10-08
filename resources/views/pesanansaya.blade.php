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

        <!-- Content Header (Page header) -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><small>Pesanan Saya</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Pesanan Saya</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <!-- Default box -->
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Projects</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div> -->
                        <div class="card-body p-0 table-responsive">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            No
                                        </th>
                                        <th style="width: 20%">
                                            Jumlah Pembelian
                                        </th>
                                        <th style="width: 30%">
                                            Waktu Pemesanan
                                        </th>
                                        <th>
                                            Biaya Total
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Status
                                        </th>
                                        <th style="width: 20%">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $index =>$row)
                                    @if(Auth::user()->id == $row->user_id && $row->payment_id)
                                        @if($row->payment->diterima == 0)
                                        <tr>
                                            <td>{{ $index + $data->firstItem() }}</td>
                                            <td>
                                                @php
                                                $total = App\Models\Keranjang::where('invoice_id', $row->id)->count();
                                                @endphp
                                                {{ $total }} Produk
                                            </td>
                                            <td>
                                                {{date_format($row->created_at, ' d-m-y')}}
                                            </td>
                                            <td>{{ $row->total }}</td>
                                            <td class="project-state">
                                                @if($row->payment_id)
                                                    @if($row->payment->status == 'settlement' || $row->payment->status == 'capture')
                                                        @if($row->payment->resi == null)
                                                            <span class="badge badge-info">Dikemas</span>
                                                        @elseif($row->payment->resi != null)
                                                            <span class="badge badge-success">Dikirim</span>
                                                        @endif
                                                    @elseif($row->payment->status == 'pending')
                                                        <span class="badge badge-warning">Menunggu Pembayaran</span>
                                                    @endif
                                                @else
                                                <span class="badge badge-danger">Belum Dibayar</span>
                                                @endif
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}">
                                                    Lihat Pesanan
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                    @else
                                    <tr>
                                        <td>{{ $index + $data->firstItem() }}</td>
                                        <td>
                                            @php
                                            $total = App\Models\Keranjang::where('invoice_id', $row->id)->count();
                                            @endphp
                                            {{ $total }} Produk
                                        </td>
                                        <td>
                                            {{date_format($row->created_at, 'd-m-y')}}
                                        </td>
                                        <td>{{ $row->total }}</td>
                                        <td class="project-state">
                                            @if($row->payment_id)
                                                @if($row->payment->status == 'settlement' || $row->payment->status == 'capture')
                                                    @if($row->payment->resi == null)
                                                        <span class="badge badge-info">Dikemas</span>
                                                    @elseif($row->payment->resi != null)
                                                        <span class="badge badge-success">Dikirim</span>
                                                    @endif
                                                @elseif($row->payment->status == 'pending')
                                                    <span class="badge badge-warning">Menunggu Pembayaran</span>
                                                @endif
                                            @else
                                            <span class="badge badge-danger">Belum Dibayar</span>
                                            @endif
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="/dashboard/pesanansaya/viewpesanan/{{$row->id}}">
                                                Lihat Pesanan
                                            </a>
                                        </td>
                                    </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer">
                                <nav aria-label="Contacts Page Navigation">
                                    <ul class="pagination justify-content-center m-0">
                                        {{$data->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

        <!-- Main Footer -->
        @include('components.footer')
        <!-- ./wrapper -->
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
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
