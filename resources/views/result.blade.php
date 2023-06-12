<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <title>Ameliia Collection | Ongkir</title>
    @include('components.css')

</head>

<body>
    <div class="container">
        <div class="my-5 shadow card">

            <div class="card-body">
                <!-- <table class="table table-borderless">
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td>{{ $destination['city_name'] }}, Kab. {{ $destination['city_name'] }}</td>
                        <input type="hidden" name="kota" value="">
                    </tr>
                    <tr>
                        <td>Kurir</td>
                        <td>:</td>
                        <td>{{ $namaKurir }}</td>
                    </tr>
                </table> -->


                <form action="{{ route('insertongkir') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tujuan</th>
                                <th>Kurir</th>
                                <th scope="col">Nama Layanan</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">ETD (Estimates Days)</th>
                                <!-- <th scope="col"></th> -->
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($rows as $cost)
                            <tr>
                                <input type="hidden" name="user" value="{{auth()->user()->id}}">
                                <td>{{ $destination['city_name'] }}</td>
                                <input type="hidden" name="kota" value="{{ $destination['city_name'] }}">
                                <td>{{ $namaKurir }}</td>
                                <input type="hidden" name="kurir" value="{{ $namaKurir }}">
                                <td>{{ $cost['description'] }}</td>
                                <!-- <input type="hidden" name="layanan" value="{{ $cost['description'] }}"> -->
                                <td>Rp. {{ number_format($cost['biaya'], 0, '.', '.') }}</td>
                                <!-- <input type="hidden" name="ongkir" value="{{ $cost['biaya'] }}"> -->
                                <td>{{ $cost['etd'] }}</td>
                                <!-- <td>
                                    <input type="checkbox" id="checkboxPrimary2">
                                    <input type="radio" id="radioPrimary3" name="ongkir" value="{{ $cost['biaya'] }}">
                                </td> -->
                            </tr>

                            @endforeach

                        </tbody>


                    </table>
                    <!-- <button type="submit" class="btn btn-primary float-right mr-2">Pilih</button> -->
                </form>

                <a href="/dashboard"><button class="btn btn-danger float-right" style="margin-right: 5px;">
                        👈 Kembali
                    </button></a>
            </div>

        </div>
    </div>

    @include('components.script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
