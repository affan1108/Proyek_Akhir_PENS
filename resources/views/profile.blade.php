<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | User Profile</title>

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
                            <h1 class="m-0"><small>Profile</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                                <li class="breadcrumb-item active">Profile</li>
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
                        <div class="col-md-3">

                            <div class="card card-success card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="{{asset('assets/images/user.png')}}"
                                            alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                                    <!-- <p class="text-muted text-center">Software Engineer</p> -->
                                    <ul class="list-group list-group-unbordered mb-3 mt-2">
                                        <li class="list-group-item">
                                            <i class="fas fa-map-marker-alt mr-1"></i><b> {{ Auth::user()->alamat }}</b>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-phone-alt mr-1"></i><b> {{ Auth::user()->nomer }}</b>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-info"></i><b> {{ Auth::user()->lainnya }}</b>
                                        </li>
                                    </ul>
                                    <a class="btn btn-danger btn-block" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity"
                                                data-toggle="tab">About Me</a></li>
                                        <!-- <li class="nav-item"><a class="nav-link" href="#timeline"
                                                data-toggle="tab">Timeline</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings"
                                                data-toggle="tab">Settings</a></li> -->
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <form action="{{ route('updateprofile') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <label for="name"><i class="fas fa-user-alt mr-1"></i> Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ Auth::user()->name }}">
                                                <br>
                                                <!-- <hr> -->
                                                <label for="alamat"><i class="fas fa-map-marker-alt mr-1"></i>
                                                    Alamat</label>
                                                <!-- <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong> -->
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    value="{{ Auth::user()->alamat }}"
                                                    placeholder="Masukkan Alamat Lengkap">
                                                <br>
                                                <!-- <hr> -->
                                                <label for="nomer"><i class="fas fa-phone-alt mr-1"></i> Nomer
                                                    Telepon</label>
                                                <!-- <strong><i class="fas fa-phone-alt mr-1"></i> Nomor Telepon</strong> -->
                                                <input type="number" class="form-control" id="nomer" name="nomer"
                                                    value="{{ Auth::user()->nomer }}"
                                                    placeholder="Masukkan Nomer Telepon">
                                                <br>
                                                <!-- <hr> -->
                                                <label for="lainnya"><i class="fas fa-info"></i> Lainnya</label>
                                                <!-- <strong><i class="fas fa-info"></i> Lainnya</strong> -->
                                                <input type="text" class="form-control" id="lainnya" name="lainnya"
                                                    value="{{ Auth::user()->lainnya }}"
                                                    placeholder="Tulis Detail Alamat (cth: patokanm, warna rumah, dll)">
                                                <div class="col mt-4">
                                                    <button type="submit"
                                                        class="btn btn-primary float-right">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

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
