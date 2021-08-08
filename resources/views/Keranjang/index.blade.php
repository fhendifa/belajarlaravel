{{-- @dd($cart) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasarKito.PLG</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">


</head>

<body>
    <section id="top">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <img src="{{ asset('asset/Capture-removebg-preview.png') }}">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="col-lg-7 mt-2">
                            <input class="form-control" type="text" placeholder="Belanjo Apo.....">
                        </div>
                        <div class="col-lg-1 mt-2">
                            <a href="">
                                <img src="{{ asset('asset/3239958.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-1 mt-2">
                            <a href="Keranjang.html">
                                <img src="{{ asset('asset/2832495.png') }}" alt="">
                            </a>
                        </div>
                        @if (Auth::user())
                            <div class="col mt-2">
                                <h3>{{ Auth::user()->name }}</h3>
                            </div>
                            <div class="col mt-2">
                                <a href="{{ url('/logoutcus') }}" role="button" class="btn btn-success">Logout</a>
                            </div>
                        @else
                            <div class="col mt-2">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modallogin">Login</button>
                            </div>
                            <div class="col mt-2">
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                                    data-target="#modalregister">Register</button>
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <section id="home">
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <p>
                        <a href="Landingpage.html" style="color: black;">
                            <i class="fas fa-home">LandingPage</i>
                        </a>
                        <a href="" style="color: black;">
                            <i class="fas fa-caret-right">Keranjang</i>
                        </a>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="keranjang">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="bg_keranjang">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <p class="text-center" style="font-weight: bold;">Gambar</p>
                            </div>
                            <div class="col-lg-3">
                                <p class="text-center" style="font-weight: bold;">Nama Barang</p>
                            </div>
                            <div class="col-lg-2">
                                <p class="text-center" style="font-weight: bold;">Quantity</p>
                            </div>
                            <div class="col-lg">
                                <p class="text-center" style="font-weight: bold;">Action</p>
                            </div>
                        </div>
                        @foreach ($cart as $item)
                            <hr style="border: solid 1px coral;">
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <div class="bg_gambar">
                                        <img src="{{ asset('dist/img/' . $item->product->photo->nama_foto) }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <h5 class="card-title m-1">{{ $item->product->nama_barang }}</h5>
                                    <p style="font-weight: bold;" class="m-1">
                                        <b>Rp.</b>{{ $item->product->harga_barang }}
                                    </p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5><b>{{$item->quantity}}</b></h5>
                                </div>
                                <div class="col-lg text-center">
                                    <div class="bg_icon">
                                        <button class="btn btn-outline-success">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" style="font-weight: bold;">Alamat</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan Alamat....">
                        </div>
                    </form>
                    <div class="bg_detail p-3">
                        <h6>ID Transaksi <span>#SH52221</span></h6>
                        <hr>
                        <h6>Subtotal <span><b>Rp.</b>{{ $subtotal }}</span></h6>
                        <hr>
                        <h6>Kurir
                            <span>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <select name="kurir" id="kurir">
                                            @foreach ($kurir as $item)
                                                <option value="{{$item->id}}">
                                                    {{$item->nama_kurir}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                            </span>
                        </h6>
                        <hr>
                        <h6>Ongkos Kirim <span>Rp. 20.000</span></h6>
                        <hr>
                        <h6>Bank Transfer
                            <span>
                                <select name="bank" id="bank">
                                    @foreach ($bank as $item)
                                        <option value="{{$item->id}}">
                                            {{$item->nama_bank}}
                                        </option>
                                    @endforeach
                                </select>
                            </span>
                        </h6>
                        <hr>
                        <h6>No. Rekening <span>0095 3485 5891</span></h6>
                        <hr>
                        <h6>Total <span>Rp. 2.520.000</span></h6>
                        <hr>
                        <a href="MetodePembayaran.html">
                            <div class="btn btn-primary mt-4"> Bayar Sekarang</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset('asset/Capture-removebg-preview.png') }}" class="mt-3 ml-2">
                    <p class="mt-3 ml-2" style="color: white; font-size: 14px;"> Sebagai Pusat Fashion Online di
                        palembang, kami
                        menciptakan gaya tanpa batas dengan cara memperluas jangkauan produk, mulai dari produk
                        internasional hingga produk lokal dambaan.
                    </p>
                </div>
                <div class="col-lg-3 mt-5" style="color: white;">
                    <h5>Layanan</h5>
                    <ul style="font-size: 14px;">
                        <li>Cara Pembelian</li>
                        <li>Barang Terlaris</li>
                        <li>Promo Hari ini</li>
                        <li>Status Order</li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-5" style="color: white;">
                    <h5>Tentang Kami</h5>
                    <ul style="font-size: 14px;">
                        <li>About Us</li>
                        <li>Persyaratan & Ketentuan</li>
                        <li>Kebijakan Privasi</li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-5" style="color: white;">
                    <h5>Kantor Pusat</h5>
                    <ul style="font-size: 14px;">
                        <li>Jl. Rajawali No.11 Ilir
                            Timur 11440 Indonesia
                        </li>
                    </ul>
                    <h5 class="mt-5">Ikuti Kami</h5>
                    <p>
                        <img src="{{ asset('/asset/2626270.png') }}" height="50px" width="50px">
                        <img src="{{ asset('/asset/2504903.png') }}" height="50px" width="50px">
                        <img src="{{ asset('/asset/3670127.png') }}" height="50px" width="50px">
                    </p>
                </div>
            </div>
            <hr style="border: 1px solid white  ;">
            <div class="row">
                <div class="col">
                    <p class="copyright ml-1" style="color: white;">Copyright<img
                            src="{{ asset('/asset/503013.png') }}" style="color: white;"> 2020
                        <span>SynaStore</span>,
                        All Right Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>
    <script src="https://kit.fontawesome.com/b0b240269b.js" crossorigin="anonymous"></script>

</body>

</html>
