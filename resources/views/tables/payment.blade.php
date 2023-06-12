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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><small>Tabel Payment</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Tabel Payment</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                @if ($message = Session::get('status'))
                    <div class="alert alert-success">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        {{ $message }}
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
                                    <h3 class="card-title mt-2">Tabel Payment</h3>
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
                                    <!-- <div class="card-header">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#add">
                                            Add
                                        </button>
                                    </div> -->
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="hijab">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%">
                                                            No
                                                        </th>
                                                        <th style="width: 20%">
                                                            Nama Pembeli
                                                        </th>
                                                        <th style="width: 30%">
                                                            Nama Barang
                                                        </th>
                                                        <th style="width: 10%">
                                                            Harga
                                                        </th>
                                                        <th style="width: 20%">
                                                            Status
                                                        </th>
                                                        <!-- <th style="width: 30%">
                                                            Aksi
                                                        </th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach($data as $index => $row)
                                                    <tr>
                                                        <td>
                                                            {{$index + $data->firstItem()}}
                                                        </td>
                                                        <td>
                                                            {{$row->user->name}}
                                                        </td>
                                                        <td>
                                                            {{$row->invoice->keranjang->produk->nama}}
                                                        </td>
                                                        <td>
                                                            {{ number_format($row['gross_amount'], 0, '.', '.') }}
                                                        </td>
                                                        <td>
                                                            @if($row->status == 'settlement' || $row->status ==
                                                            'capture')
                                                            <span class="badge badge-success">Sudah Dibayar</span>
                                                            @elseif($row->status == 'pending')
                                                            <span class="badge badge-danger">Belum Dibayar</span>
                                                            @endif
                                                        </td>
                                                        <td class="project-actions">
                                                            <!-- <a class="btn btn-primary btn-sm" href="/view/{{$row->id}}">
                                                                <i class="fas fa-folder">
                                                                </i>
                                                                View
                                                            </a> -->
                                                            <!-- <a class="btn btn-info btn-sm" href="/edit/{{$row->id}}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Edit
                                                            </a> -->
                                                            <!-- <a href="#" class="btn btn-outline-danger btn-sm delete"data-id="{{ $row->id}}"
                                                                data-nama="{{ $row->nama }}"> -->
                                                            <a class="btn btn-danger btn-sm delete"
                                                                href="#" data-id="{{ $row->id}}">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>
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
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <!-- <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addLabel">Tambah Warna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/addwarna" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="nama">Nama Produk</label>

                                                <select class="form-control select2bs4" style="width: 100%;"
                                                    name="produk_id">
                                                    @foreach (App\Models\Hijab::all() as $u)
                                                    <option value="{{ $u->id }}">{{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-body">
                                                <label for="warna">Warna</label>
                                                <input type="text" class="form-control" id="warna" name="warna"
                                                    placeholder="Warna">
                                            </div>
                                            <div class="modal-body">
                                                <label for="stok">Stok</label>
                                                <input type="text" class="form-control" id="stok" name="stok"
                                                    placeholder="Jumlah Stok">
                                            </div>
                                            <div class="modal-body">
                                                <label for="ukuran">Ukuran</label>
                                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                                    placeholder="Ukuran">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
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
    @include('sweetalert::alert')

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
                integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        $('.delete').click(function () {
            var jenisid = $(this).attr('data-id');
            // var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin?",
                    text: "Akan menghapus dokumen ID " + jenisid + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletepayment/{{$row->id}}/" + jenisid + ""
                    } else {
                        swal("Dokumen Tidak Terhapus");
                    }
                });
        }); 

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
