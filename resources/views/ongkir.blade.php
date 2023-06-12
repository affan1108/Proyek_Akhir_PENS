<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

    <title>Ameliia Collection | Ekspedisi</title>
    @include('components.css')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="my-5 shadow card">
                    <h5 class="text-center card-header">
                        Pilih Ekspedisi
                    </h5>
                    <div class="card-body">
                        <form action="{{ route('sumbit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="province_destination" class="form-label">Provinsi Tujuan</label>
                                        <select class="form-control select2bs4 js-example-basic @error('province_destination') is-invalid @enderror"
                                            name="province_destination" id="province_destination">
                                            <option selected disabled>--Provinsi--</option>
                                            @foreach ($provinces as $province => $value)
                                                <option value="{{ $province }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        @error('province_destination')
                                            <div id="province_destination" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="city_destination" class="form-label">Kota Tujuan</label>
                                        <select class="form-control select2bs4 js-example-basic @error('city_destination') is-invalid @enderror"
                                            name="city_destination" id="city_destination">
                                            <option selected disabled>--Kota--</option>
                                        </select>
                                        @error('city_destination')
                                            <div id="city_destination" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="courier" class="form-label">Kurir</label>
                                        <select class="form-control select2bs4 js-example-basic form-control @error('courier') is-invalid @enderror"
                                            name="courier" id="courier">
                                            <option selected disabled>--Kurir--</option>
                                            @foreach ($couriers as $courier => $value)
                                                <option value="{{ $courier }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        @error('courier')
                                            <div id="courier" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="weight" class="form-label">Berat (g)</label>
                                        <input type="number" name="weight"
                                            class="form-control @error('weight') is-invalid @enderror" id="weight"
                                            min="1">
                                        @error('weight')
                                            <div id="weight" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> -->
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary float-right" id="hasil">Cek</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.script')
    @include('sweetalert::alert')

    <!-- <script>
        function cekOngkir(){
            var id_provinsi = document.getEelementById("province_destination").value;
            var id_kota = document.getEelementById("city_destination").value;
            var id_kurir = document.getEelementById("courier").value;

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200){
                    document.getEelementById("hasil").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", )
        }
    </script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
