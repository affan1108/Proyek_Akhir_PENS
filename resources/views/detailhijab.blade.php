<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Detail</title>

    @include('components.css')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/dashboard')}}" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link bg-success">
                <img src="{{asset('assets/images/logo2.png')}}" alt="Logo Ameliia Collection"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="d-block"> Ameliia Collection</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets/images/user.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/profile" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item bg-success">
                            <a href="{{url('/dashboard')}}" class="nav-link bg-success-active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if(auth()->user()->name=="admin")
                        <li class="nav-header"><strong>USER</strong></li>
                        @endif
                        <li class="nav-item">
                            <a href="{{url('/pesanansaya')}}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Pesanan Saya
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/riwayatpesanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Riwayat Pesanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/penilaianpesanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Penilaian Pesanan
                                </p>
                            </a>
                        </li>
                        @if(auth()->user()->name=="admin")
                        <li class="nav-header"><strong>ADMIN</strong></li>
                        <li class="nav-item">
                            <a href="{{url('/daftarpesanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Daftar Pesanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/daftarproduk')}}" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Daftar Produk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/daftarpenilaian')}}" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Daftar Penilaian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/warna" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Warna</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ukuran" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Ukuran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ekspedisi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Ekspedisi</p>
                                    </a>
                                </li>
                                @endif
                            </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Detail Hijab</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="{{url('/hijab')}}">Hijab</a></li> -->
                                <li class="breadcrumb-item active">Detail Hijab</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        
                        <div class="row">
                        
                            <div class="col-12 col-sm-6">
                                <div class="col-12">
                                    <img src="{{asset('assets/'.$data->foto)}}" class="product-image"
                                        alt="Product Image">
                                </div>
                                <!-- <div class="col-12 product-image-thumbs">
                                    <div class="product-image-thumb active"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                </div> -->
                            </div>
                            
                            <div class="col-12 col-sm-6">
                            <form action="/keranjang" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="user" value="{{auth()->user()->id}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="nama" value="{{$data->nama}}">
                                    <h3>{{$data->nama}}</h3>
                                    <!-- <p>{{$data->deskripsi}}</p> -->
                                </div>
                                <hr>
                                <!-- <h4>Available Colors</h4> -->
                                <div class="form-group">
                                    <h4 class="mt-3">Pilihan Warna <small>(Pilih salah satu)</small></h4>
                                    <select class="form-control select2bs4 js-example-basic form-control"
                                        style="width: 100%;" id="warna" name="warna">
                                        <!-- @foreach (\App\Models\Warna::all() as $r)
                                            <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                        @endforeach -->
                                        <?php
                                                $warna = explode(',', $data['warna']);
                                                $warna = json_decode($data->warna);
                                                foreach($warna as $lu){
                                                       echo '<option value="'.$lu.'" >'.$lu.'</option>';
                                                    }
                                              ?>
                                              <!-- <select class="form-control select2" name="some_user_id[]" style="width:100%" multiple id="some_user_id">                                             
                                               
                                           </select> -->
                                        <!-- <option value="{{ $data->warna }}">{{ $data->warna}}</option> -->
                                        <!-- <option value="{{ $r->id }}">{{ $r->warna}}</option> -->
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <h4 class="mt-3">Pilihan Ukuran <small>(Pilih salah satu)</small></h4>
                                    <div class="form-group">
                                        <select class="form-control select2bs4" style="width: 100%;" name="ukuran"> -->
                                            <?php
                                                // $ukuran = explode(',', $data['ukuran']);
                                                // $ukuran = json_decode($data->ukuran);
                                                //   echo "data 1 = " .$warna[0];
                                                //   echo "<br/>";
                                                //   echo "data 2 = " .$warna[1];
                                                //   <option value="{{ $data->warna }}" {{ in_array($data->warna, $warna) ? 'selected' : '' }}>{{ $data->warna }}</option>
                                            //     foreach($ukuran as $u){
                                            //       echo '<option value="'.$u.'">'.$u.'</option>';
                                            //     }
                                            ?>
                                        <!-- </select>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <h4 class="mt-3">Jumlah <small>(Minimal Satu)</small></h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" min="1">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="province_origin" class="form-label">Provinsi Asal</label>
                                    <select class="form-control select2bs4 js-example-basic form-control @error('province_origin') is-invalid @enderror"
                                        name="province_origin" id="province_origin">
                                        <option selected disabled>--Provinsi--</option>
                                        @foreach ($provinces as $province => $value)
                                            <option value="{{ $province }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('province_origin')
                                        <div id="province_origin" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="city_origin" class="form-label">Kota Asal</label>
                                    <select class="form-control select2bs4 js-example-basic form-control @error('city_origin') is-invalid @enderror"
                                        name="city_origin" id="city_origin">
                                        <option selected disabled>--Kota--</option>
                                    </select>
                                    @error('city_origin')
                                        <div id="city_origin" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> -->
                                <div class="bg-gray py-2 px-3 mt-4">
                                    <h2 class="mb-0">
                                        <input type="hidden" name="harga" value="{{$data->harga}}">
                                        Rp: {{$data->harga}}
                                    </h2>
                                    <!-- <h4 class="mt-0">
                                        <small>Ex Tax: $80.00 </small>
                                    </h4> -->
                                </div>

                                <div class="mt-4">
                                    <!-- <button type="button" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button> -->
                                    <a href="/invoice">
                                        <button type="submit" class="btn btn-success float-right"
                                            style="margin-right: 5px;"><input type="hidden" name="hitung" value="Hitung">
                                            Order Now
                                        </button>
                                    </a>
                                    <!-- <div class="btn btn-primary btn-lg btn-flat">
                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                        Add to Cart
                                    </div>
                                    <a href="{{ url('/invoice') }}">
                                        <button type="submit" class="btn btn-danger"><input type="hidden" name="hitung" value="Hitung">order now</button>
                                    </a> -->
                                </div>

                                <!-- <div class="mt-4 product-share">
                                    <a href="#" class="text-gray">
                                        <i class="fab fa-facebook-square fa-2x"></i>
                                    </a>
                                    <a href="#" class="text-gray">
                                        <i class="fab fa-twitter-square fa-2x"></i>
                                    </a>
                                    <a href="#" class="text-gray">
                                        <i class="fas fa-envelope-square fa-2x"></i>
                                    </a>
                                    <a href="#" class="text-gray">
                                        <i class="fas fa-rss-square fa-2x"></i>
                                    </a>
                                </div> -->
                            </form>
                                <form action="/cart" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-4">
                                        <!-- <button type="submit" class="btn btn-primary float-right mr-2"><i
                                                class="fas fa-cart-plus mr-1"></i>Tambah ke keranjang
                                        </button> -->
                                        <!-- <a class="btn btn-primary btn-sm" href="/home">
                                                                <i class="fas fa-truck"></i>
                                                            </a> -->
                                    </div>
                                </form>
                            </div>
                    
                            
                        </div>
                        <div class="row mt-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                        href="#product-comments" role="tab" aria-controls="product-comments"
                                        aria-selected="false">Comments</a>
                                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                        href="#product-rating" role="tab" aria-controls="product-rating"
                                        aria-selected="false">Rating</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                    aria-labelledby="product-desc-tab">
                                    {{$data->deskripsi}}
                                    <!-- <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">Description lists</dt>
                                            <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
                                            <dt class="col-sm-4">Euismod</dt>
                                            <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget
                                                lacinia odio sem nec elit.</dd>
                                            <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget
                                                metus.</dd>
                                            <dt class="col-sm-4">Malesuada porta</dt>
                                            <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
                                            <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
                                            <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                                condimentum nibh, ut fermentum massa justo
                                                sit amet risus.
                                            </dd>
                                        </dl>
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                    aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus.
                                    Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et
                                    finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum,
                                    venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna.
                                    Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris
                                    hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl
                                    dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis
                                    dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex
                                    ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                                <div class="tab-pane fade" id="product-rating" role="tabpanel"
                                    aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non,
                                    posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id
                                    fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel
                                    ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod
                                    neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet
                                    feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie
                                    lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at,
                                    consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a.
                                    Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi
                                    orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius
                                    massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('components.script')
    <script>
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
