<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ameliia Collection | Detail</title>

    @include('components.css')
    <link href="{{asset('temp/css/styles.css')}}" rel="stylesheet" />
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="estore/assets/images/favicon.png" type="image/png">

    <!--====== Slick CSS ======-->
    <!-- <link rel="stylesheet" href="{{asset('estore/assets/css/slick.css')}}"> -->

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/LineIcons.css')}}">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/materialdesignicons.min.css')}}">

    <!--====== Jquery Ui CSS ======-->
    <!-- <link rel="stylesheet" href="{{asset('estore/assets/css/jquery-ui.min.css')}}"> -->

    <!--====== nice select CSS ======-->
    <!-- <link rel="stylesheet" href="{{asset('estore/assets/css/nice-select.css')}}"> -->

    <!--====== Bootstrap CSS ======-->
    <!-- <link rel="stylesheet" href="{{asset('estore/assets/css/bootstrap.min.css')}}"> -->

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('estore/assets/css/style.css')}}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        @include('components.nav-bar')
        <!-- /.navbar -->

        <!-- <section class="product-details-wrapper pt-50 pb-100">
        <div class="container">
            <div class="product-details-style-1">
                <div class="row flex-lg-row-reverse align-items-center">
                    <div class="col-lg-6">
                        <div class="product-details-image mt-50">
                            <div class="product-image">
                                <div class="product-image-active-1">
                                    <div class="single-image">
                                        <img src="{{asset('assets/'.$data->foto)}}" class="product-image"
                                            alt="Product Image">
                                    </div>
                                    <div class="single-image">
                                        <img src="assets/images/product-details-1/product-2.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="assets/images/product-details-1/product-3.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="assets/images/product-details-1/product-4.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="assets/images/product-details-1/product-5.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="assets/images/product-details-1/product-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb-image">
                                <div class="product-thumb-image-active-1">
                                    <div class="single-thumb">
                                        <img src="{{asset('assets/'.$data->foto)}}" class="product-image"
                                            alt="Product Image">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="assets/images/product-details-1/thunb-2.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="assets/images/product-details-1/thunb-3.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="assets/images/product-details-1/thunb-4.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="assets/images/product-details-1/thunb-5.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="assets/images/product-details-1/thunb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content mt-45">
                            <p class="sub-title">All-In-One VR</p>
                            <h2 class="title">{{$data->nama}}</h2>

                            <div class="product-items flex-wrap">
                                <h6 class="item-title">Select Your Oculus: </h6>
                                <div class="items-wrapper">
                                    <div class="single-item active">
                                        <div class="items-image">
                                            <img src="assets/images/product-details-1/product-items-1.jpg"
                                                alt="product">
                                        </div>
                                        <p class="text">Oculus Go</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="items-image">
                                            <img src="assets/images/product-details-1/product-items-2.jpg"
                                                alt="product">
                                        </div>
                                        <p class="text">Oculus Quest</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="items-image">
                                            <img src="assets/images/product-details-1/product-items-3.jpg"
                                                alt="product">
                                        </div>
                                        <p class="text">Oculus Rift S</p>
                                    </div>
                                </div>
                            </div>

                            <div class="product-select-wrapper flex-wrap">
                                <div class="select-item">
                                    <h6 class="select-title">Select Color: </h6>
                                    <select class="form-control select2bs4 js-example-basic form-control"
                                        style="width: 100%;" id="warna" name="warna_id">
                                        @foreach (App\Models\Warna::all() as $r)
                                        @if($data->id == $r->produk_id)
                                        <option value="{{ $r->id }}">{{ $r->warna }} - {{ $r->ukuran }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="product-select-wrapper flex-wrap">
                                <div class="select-item">
                                    <h6 class="select-title">Select Quantity: </h6>

                                    <div class="select-quantity">
                                        <button type="button" id="sub" class="sub"><i
                                                class="mdi mdi-minus"></i></button>
                                        <input type="text" value="1" />
                                        <button type="button" id="add" class="add"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="product-price">
                                <h6 class="price-title">Price: </h6>
                                <p class="sale-price">$ 149 USD</p>
                                <p class="regular-price">$ 179 USD</p>
                            </div>

                            <div class="product-btn">
                                <a href="javascript:void(0)" class="main-btn primary-btn">
                                    <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                    Add to cart
                                </a>
                                <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                    <img src="assets/images/icon-svg/cart-8.svg" alt="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><small>Detail Hijab</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
                            <li class="breadcrumb-item active">Detail Hijab</li>
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

                    <div class="col-12 col-sm-6">
                        <div class="col-12" id="foto">
                            <img src="{{asset('assets/'.$data->produk->foto)}}" class="product-image" alt="Product Image">
                        </div>
                                <div class="col-12 product-image-thumbs">
                                @foreach (App\Models\Warna::all() as $r)
                                    @if($data->id == $r->hijab_id)
                                    @if($r->foto != null)
                                    <div class="product-image-thumb active"><img src="{{asset('assets/'.$r->foto)}}"
                                            alt="Product Image"></div>
                                    <!-- <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="{{asset('assets/'.$data->foto)}}"
                                            alt="Product Image"></div> -->
                                    @endif
                                    @endif
                                @endforeach
                                </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <form action="/updatekeranjang/{{$data->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <!-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> -->
                            </div>
                            <div class="form-group">
                                <!-- <input type="hidden" name="produk_id" value="{{$data->id}}"> -->
                                <h3>{{$data->produk->nama}}</h3>
                                <!-- <p>{{$data->deskripsi}}</p> -->
                            </div>
                            <hr>
                            <!-- <h4>Available Colors</h4> -->
                            <div class="form-group">
                                <h4 class="mt-3">Pilihan Warna <small>(Pilih salah satu)</small></h4>
                                <select class="form-control select2bs4" style="width: 100%;" name="warna_id">
                                    <option selected disabled>
                                        {{$data->warna->warna}} - {{$data->warna->ukuran}}</option>
                                    @foreach (App\Models\Warna::all() as $u)
                                    @if($u->hijab_id == $data->produk_id)
                                    <option value="{{ $u->id }}" {{ old('hijab_id', $u->hijab_id) == $u->id ? 'selected' : null}}>
                                        {{ $u->warna }} - {{$u->ukuran}}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>

                                <!-- <div id="poll">
                                        <span>jumlah stok {{$r->stok}}</span>
                                    </div> -->
                                <span id="stok"></span>
                            </div>
                            <!-- <input type="text" id="stok" name="stok"> -->
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
                                <h4 class="mt-3">Jumlah</h4>
                                <div class="form-group">
                                    <!-- <input type="number" class="form-control" id="stok" name="jumlah"
                                    placeholder="Masukkan Jumlah" min="1" max="{{$r->stok}}"> -->
                                    <div class="product-quantity d-inline-flex">
                                        <button type="button" id="sub" class="sub">
                                            <i class="mdi mdi-minus"></i>
                                        </button>
                                        <input type="text" id="stok" name="jumlah" value="{{ old('jumlah', $data->jumlah)}}">
                                        <button type="button" id="add" class="add">
                                            <i class="mdi mdi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2 mt-4" id="harga">
                                <h2 class="mb-0">
                                    <!-- <input type="hidden" name="harga" value="{{$data->harga}}"> -->
                                    Rp: {{ old('harga', $data->warna->harga)}}
                                </h2>
                                <!-- <h4 class="mt-0">
                                        <small>Ex Tax: $80.00 </small>
                                    </h4> -->
                            </div>
                            <hr>

                            <div class="mt-4">
                                <!-- <button type="button" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button> -->
                                <button type="submit" class="btn btn-success float-right" style="margin-right: 5px;">
                                    Edit Pesanan
                                </button>
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
                                aria-selected="false">Comments & Rating</a>
                            <!-- <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                href="#product-rating" role="tab" aria-controls="product-rating"
                                aria-selected="false">Rating</a> -->
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab">
                            {!!$data->deskripsi!!}
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
                        <!-- <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="review-wrapper">
                            <div class="reviews-title">
                                <h4 class="title">Customer Reviews (38)</h4>
                            </div>
                        
                            <div class="reviews-rating-wrapper flex-wrap">
                                <div class="reviews-rating-star">
                                    <p class="rating-review"><i class="mdi mdi-star"></i> <span>4.5</span> of 5</p>
                        
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">5 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 60%;"></div>
                                            </div>
                                            <p class="percent">60%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">4 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 20%;"></div>
                                            </div>
                                            <p class="percent">20%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">3 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 10%;"></div>
                                            </div>
                                            <p class="percent">10%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">2 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 5%;"></div>
                                            </div>
                                            <p class="percent">05%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">1 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 0;"></div>
                                            </div>
                                            <p class="percent">0%</p>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="reviews-rating-form">
                                    <div class="rating-star">
                                        <p>Click on star to review</p>
                                        <ul id="stars" class="stars">
                                            <li class="star" data-value='1'><i class="mdi mdi-star"></i></li>
                                            <li class="star" data-value='2'><i class="mdi mdi-star"></i></li>
                                            <li class="star" data-value='3'><i class="mdi mdi-star"></i></li>
                                            <li class="star" data-value='4'><i class="mdi mdi-star"></i></li>
                                            <li class="star" data-value='5'><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="rating-form">
                                        <form action="#">
                                            <div class="single-form form-default">
                                                <label>Write your Review</label>
                                                <div class="form-input">
                                                    <textarea placeholder="Your review here"></textarea>
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </div>
                                            </div>
                                            <div class="single-rating-form flex-wrap">
                                                <div class="rating-form-file">
                                                    <div class="file">
                                                        <input type="file" id="file-1">
                                                        <label for="file-1"><i class="mdi mdi-camera"></i></label>
                                                    </div>
                                                    <div class="file">
                                                        <input type="file" id="file-1">
                                                        <label for="file-1"><i class="mdi mdi-attachment"></i></label>
                                                    </div>
                                                </div>
                                                <div class="rating-form-btn">
                                                    <button class="main-btn primary-btn">write a Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="reviews-btn flex-wrap">
                                <div class="reviews-btn-left">
                                    <div class="dropdown-style">
                                        <div class="dropdown dropdown-white">
                                            <button class="main-btn primary-btn" type="button" id="dropdownMenu-1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"> All Stars (213) <i
                                                    class="mdi mdi-chevron-down"></i></button>
                        
                                            <ul class="dropdown-menu sub-menu-bar" aria-labelledby="dropdownMenu-1">
                                                <li><a href="#">Dropped Menu 1</a></li>
                                                <li><a href="#">Dropped Menu 2</a></li>
                                                <li><a href="#">Dropped Menu 3</a></li>
                                                <li><a href="#">Dropped Menu 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown-style">
                                        <div class="dropdown dropdown-white">
                                            <button class="main-btn primary-btn-border" type="button" id="dropdownMenu-1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"> Sort by Latest <i
                                                    class="mdi mdi-chevron-down"></i></button>
                        
                                            <ul class="dropdown-menu sub-menu-bar" aria-labelledby="dropdownMenu-1">
                                                <li><a href="#">Dropped Menu 1</a></li>
                                                <li><a href="#">Dropped Menu 2</a></li>
                                                <li><a href="#">Dropped Menu 3</a></li>
                                                <li><a href="#">Dropped Menu 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="reviews-btn-right">
                                    <a href="#" class="main-btn">with photo (18)</a>
                                    <a href="#" class="main-btn">additional feedback (23)</a>
                                </div>
                            </div>
                        
                            <div class="reviews-comment">
                                <ul class="comment-items">
                                    <li>
                                        <div class="single-review-comment">
                                            <div class="comment-user-info">
                                                <div class="comment-author">
                                                    <img src="assets/images/review/author-1.jpg" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <h6 class="name">User Name</h6>
                        
                                                    <p>
                                                        <i class="mdi mdi-star"></i>
                                                        <span class="rating"><strong>4</strong> of 5</span>
                                                        <span class="date">20 Nov 2019 22:01</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="comment-user-text">
                                                <p>Good headphones. The sound is clear. AND the bottoms repyat and top ring. Currently
                                                    are really not taken. For me quiet. With my Beats of course can not be compared. But
                                                    for the money and definitely recommend. The one who took happy as an elephant.
                                                    Product as advertised, looks good Quality, sound is not the best but because of
                                                    cost-benefit ratio it seems very good to me, recommended the seller .</p>
                                                <ul class="comment-meta">
                                                    <li><i class="mdi mdi-thumb-up"></i> <span>31</span></li>
                                                    <li><a href="#">Like</a></li>
                                                    <li><a href="#">Replay</a></li>
                                                </ul>
                                            </div>
                                        </div>
                        
                                        <ul class="comment-replay">
                                            <li>
                                                <div class="single-review-comment">
                                                    <div class="comment-user-info">
                                                        <div class="comment-author">
                                                            <img src="assets/images/review/author-2.jpg" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h6 class="name">User Name</h6>
                        
                                                            <p>
                                                                <i class="mdi mdi-star"></i>
                                                                <span class="rating"><strong>4</strong> of 5</span>
                                                                <span class="date">20 Nov 2019 22:01</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="comment-user-text">
                                                        <p>Good headphones. The sound is clear. AND the bottoms repyat and top ring.
                                                            Currently are really not taken.</p>
                                                        <div class="comment-image flex-wrap">
                                                            <div class="image">
                                                                <img src="assets/images/review/attachment-1.jpg" alt="">
                                                            </div>
                                                            <div class="image">
                                                                <img src="assets/images/review/attachment-2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <ul class="comment-meta">
                                                            <li><i class="mdi mdi-thumb-up"></i> <span>31</span></li>
                                                            <li><a href="#">Like</a></li>
                                                            <li><a href="#">Replay</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-review-comment">
                                                    <div class="comment-user-info">
                                                        <div class="comment-author">
                                                            <img src="assets/images/review/author-3.jpg" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h6 class="name">User Name</h6>
                        
                                                            <p>
                                                                <i class="mdi mdi-star"></i>
                                                                <span class="rating"><strong>4</strong> of 5</span>
                                                                <span class="date">20 Nov 2019 22:01</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="comment-user-text">
                                                        <p>Good headphones. The sound is clear. AND the bottoms repyat and top ring.
                                                            Currently are really not taken.</p>
                                                        <ul class="comment-meta">
                                                            <li><i class="mdi mdi-thumb-up"></i> <span>31</span></li>
                                                            <li><a href="#">Like</a></li>
                                                            <li><a href="#">Replay</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="single-review-comment">
                                            <div class="comment-user-info">
                                                <div class="comment-author">
                                                    <img src="assets/images/review/author-4.jpg" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <h6 class="name">User Name</h6>
                        
                                                    <p>
                                                        <i class="mdi mdi-star"></i>
                                                        <span class="rating"><strong>4</strong> of 5</span>
                                                        <span class="date">20 Nov 2019 22:01</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="comment-user-text">
                                                <p>Good headphones. The sound is clear. AND the bottoms repyat and top ring. Currently
                                                    are really not taken. For me quiet. With my Beats of course can not be compared. But
                                                    for the money and definitely recommend. The one who took happy as an elephant.
                                                    Product as advertised, looks good Quality, sound is not the best but because of
                                                    cost-benefit ratio it seems very good to me, recommended the seller .</p>
                                                <ul class="comment-meta">
                                                    <li><i class="mdi mdi-thumb-up"></i> <span>31</span></li>
                                                    <li><a href="#">Like</a></li>
                                                    <li><a href="#">Replay</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                        <div class="tab-pane fade" id="product-comments" role="tabpanel"
                            aria-labelledby="product-comments-tab">
                            @foreach(App\Models\Payment::all() as $row)
                            @if($data->id == $row->invoice->keranjang->produk->id && $row->rating != null)
                            <!-- {{$row->invoice_id}} -->
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <div class="review-wrapper">

                                    <div class="reviews-comment">
                                        <ul class="comment-items">
                                            <li>
                                                <div class="single-review-comment">
                                                    <div class="comment-user-info">
                                                        <div class="comment-author">
                                                            <img src="assets/images/review/author-1.jpg" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h6 class="name">{{$row->user->name}}</h6>

                                                            <p>
                                                                <i class="mdi mdi-star"></i>
                                                                <span class="rating"><strong>{{$row->rating}}</strong>
                                                                    of 5</span>
                                                                <span class="date">{{$row->updated_at}}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="comment-user-text">
                                                        <p>{{$row->deskripsi}}</p>
                                                        <div class="comment-image flex-wrap">
                                                            <div class="image">
                                                                <img src="{{asset('assets/'.$row->foto)}}" alt=""
                                                                    width="50">
                                                            </div>
                                                        </div>
                                                        <!-- <ul class="comment-meta">
                                                            <li><i class="mdi mdi-thumb-up"></i> <span>31</span></li>
                                                            <li><a href="#">Like</a></li>
                                                            <li><a href="#">Replay</a></li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <!-- <div class="tab-pane fade" id="product-rating" role="tabpanel"
                            aria-labelledby="product-rating-tab">
                            Cras ut ipsum ornare, aliquam ipsum non,
                            posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id
                            fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel
                            ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod
                            neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet
                            feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie
                            lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at,
                            consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum
                            a.
                            Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis
                            nisi
                            orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec
                            varius
                            massa at semper posuere. Integer finibus orci vitae vehicula placerat. 
                        </div> -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- Main Footer -->
        @include('components.footer')
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
                $('select[name="warna_id"]').on('change', function () {
                    let stokId = $(this).val();

                    if (stokId) {
                        $.ajax({
                            url: '/harga/' + stokId,
                            type: 'GET',
                            dataType: 'json',
                            success: function (data) {
                                // <input type="text" id="stok" name="stok">
                                $('#harga').empty();
                                $.each(data, function (key, value) {
                                    $('#harga').append('<h2>Rp. ' + value + '</h2>');
                                });
                            }
                        });
                    } else {
                        $('#harga').empty();
                    }
                });

                $('select[name="warna_id"]').on('change', function () {
                    let stokId = $(this).val();

                    if (stokId) {
                        $.ajax({
                            url: '/foto/' + stokId,
                            type: 'GET',
                            dataType: 'json',
                            success: function (data) {
                                // <input type="text" id="stok" name="stok">
                                $('#foto').empty();
                                $.each(data, function (key, value) {
                                    var gambarContainer = document.getElementById('foto');
                                    var imgElement = document.createElement('img');
                                    imgElement.src = "{{ asset('assets') }}/" + value;
                                    gambarContainer.appendChild(imgElement);

                                });
                            }
                        });
                    } else {
                        $('#foto').empty();
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
        <!--====== Bootstrap 5 js ======-->
        <!-- <script src="{{asset('estore/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('estore/assets/js/bootstrap.min.js')}}"></script> -->


        <!--====== Jquery js ======-->
        <!-- <script src="{{asset('estore/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('estore/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script> -->

        <!--====== Slick js ======-->
        <!-- <script src="{{asset('estore/assets/js/slick.min.js')}}"></script> -->

        <!--====== Accordion Steps Form js ======-->
        <!-- <script src="{{asset('estore/assets/js/jquery-vj-accordion-steps.js')}}"></script> -->

        <!--====== Jquery Ui js ======-->
        <!-- <script src="{{asset('estore/assets/js/jquery-ui.min.js')}}"></script> -->

        <!--====== Form validator js ======-->
        <!-- <script src="{{asset('estore/assets/js/jquery.form-validator.min.js')}}"></script> -->

        <!--====== nice select js ======-->
        <!-- <script src="{{asset('estore/assets/js/jquery.nice-select.min.js')}}"></script> -->

        <!--====== formatter js ======-->
        <!-- <script src="{{asset('estore/assets/js/jquery.formatter.min.js')}}"></script> -->

        <!--====== Main js ======-->
        <script src="{{asset('estore/assets/js/count-up.min.js')}}"></script>

        <!--====== Main js ======-->
        <script src="{{asset('estore/assets/js/main.js')}}"></script>
</body>

</html>
