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
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pusat Bantuan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Pusat Bantuan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12" id="accordion">
                            <div class="card card-primary card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                    <div class="card-header">
                                        <h4 class="card-title w-100 mt-2">
                                            1. Bagaimana cara membuat akun baru?
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="timeline">
                                                            <div>
                                                                <i class="fas fa-user-lock bg-blue"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">Admin</a>
                                                                    </h3>
                                                                    <div class="timeline-body">
                                                                        Untuk memesan barang atau produk di toko kami
                                                                        <b>user</b> wajib memiliki akun. Berikut kami
                                                                        jelaskan cara membuat akun bagi <b>user</b> baru
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        baru</h3>
                                                                    <div class="timeline-body">
                                                                        Melakukan pendaftaran akun pada halaman yang
                                                                        telah
                                                                        disediakan
                                                                        <br>
                                                                        (Klik tombol Sign Up di sebelah atas kanan yang
                                                                        berwarna biru)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        baru</h3>
                                                                    <div class="timeline-body">
                                                                        Mengisi form yang terdiri dari username, email,
                                                                        dan
                                                                        password
                                                                        <br>
                                                                        (Format email : @gmail.com)
                                                                        <br>
                                                                        (Format password : terdiri dari 8 karakter)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        baru</h3>
                                                                    <div class="timeline-body">
                                                                        Langkah selanjutnya verifikasi email yang telah
                                                                        anda
                                                                        daftarkan
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        baru</h3>
                                                                    <div class="timeline-body">
                                                                        Berhasil membuat akun
                                                                    </div>
                                                                    <div class="timeline-footer">
                                                                        <a class="btn btn-primary btn-sm"
                                                                            href="/register">Buat Akun</a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- <div>
                                                            <i class="fa fa-camera bg-purple"></i>
                                                            <div class="timeline-item">
                                                                <span class="time"><i class="fas fa-clock"></i> 2 days
                                                                    ago</span>
                                                                <h3 class="timeline-header"><a href="#">Mina Lee</a>
                                                                    uploaded new photos</h3>
                                                                <div class="timeline-body">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                    <div class="card-header">
                                        <h4 class="card-title w-100 mt-2">
                                            2. Bagaimana saya mengganti password?
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="timeline">
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        Terdaftar</h3>
                                                                    <div class="timeline-body">
                                                                        Input email yang telah anda daftarkan di website
                                                                        ameliia collection pada halaman lupa password
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        Terdaftar</h3>
                                                                    <div class="timeline-body">
                                                                        Reset password lama dengan password yang baru
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        Terdaftar</h3>
                                                                    <div class="timeline-body">
                                                                        Password berhasil diperbarui
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- <div>
                                                            <i class="fa fa-camera bg-purple"></i>
                                                            <div class="timeline-item">
                                                                <span class="time"><i class="fas fa-clock"></i> 2 days
                                                                    ago</span>
                                                                <h3 class="timeline-header"><a href="#">Mina Lee</a>
                                                                    uploaded new photos</h3>
                                                                <div class="timeline-body">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                    <div class="card-header">
                                        <h4 class="card-title w-100 mt-2">
                                            3. Mengapa saya tidak bisa memesan barang yang telah dipilih?
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="timeline">
                                                            <div>
                                                                <i class="fas fa-user-lock bg-blue"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">Admin</a>
                                                                    </h3>
                                                                    <div class="timeline-body">
                                                                        Untuk memesan barang atau produk di toko kami
                                                                        <b>user</b> wajib melengkapi <b>data diri</b>
                                                                        pada halaman profil
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <i class="fas fa-user bg-green"></i>
                                                                <div class="timeline-item">
                                                                    <h3 class="timeline-header"><a href="#">User</a>
                                                                        Terdaftar</h3>
                                                                    <div class="timeline-body">
                                                                        Isi kolom <b>alamat</b>, <b>nomor telepon</b>,
                                                                        dan <b>detail rumah</b> anda dengan benar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card card-warning card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            3. Cara Memesan Produk
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-danger card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            7. Aenean leo ligula
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3 text-center">
                            <p class="lead">
                                <a href="#">Hubungi Kami</a>,
                                jika kamu punya pertanyaan lain<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
</body>


</html>
