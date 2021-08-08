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
                            <div class="col mt-2 ml-3">
                                <h3>{{ Auth::user()->name }}</h3>
                            </div>
                            <div class="col mt-2 ml-3">
                                <a href="{{ url('/logoutcus') }}" role="button" class="btn btn-success">Logout</a>
                            </div>
                        @else
                            <div class="col mt-2 ml-3">
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
                        <a href="Kategori.html" style="color: black;">
                            <i class="fas fa-caret-right">Kategori</i>
                        </a>
                        <a href="ListProduct.html" style="color: black;">
                            <i class="fas fa-caret-right">List</i>
                        </a>
                        <a style="color: black;">
                            <i class="fas fa-caret-right">DetailProduct</i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('dist/img/' . $product->photo->nama_foto) }}">
                </div>
                <div class="col-lg-6">
                    <h2>
                        {{ $product->nama_barang }}
                    </h2>
                    <h4>
                        {{ $product->harga_barang }}
                    </h4>
                    <h5>
                        Pilih Ukuran
                    </h5>
                    <div class="dropdown mb-4 mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ukuran
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">40</button>
                            <button class="dropdown-item" type="button">41</button>
                            <button class="dropdown-item" type="button">42</button>
                            <button class="dropdown-item" type="button">43</button>
                            <button class="dropdown-item" type="button">44</button>
                        </div>
                    </div>
                    <form action="{{ url('/cart') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <input type="number" class="form-control" id="quantity" name="quantity" min="1"
                                    max="{{ $product->stock_barang }}">
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 mt-5">
                    <img src="{{ asset('dist/img/' . $product->photo->nama_foto) }}" class="sepatu">
                </div>
                <div class="col-lg-2 mt-5">
                    <img src="{{ asset('dist/img/' . $product->photo->nama_foto) }}" class="sepatu">
                </div>
                <div class="col-lg-2 mt-5">
                    <img src="{{ asset('dist/img/' . $product->photo->nama_foto) }}" class="sepatu">
                </div>
                <div class="col-lg-3">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-outline-success form-control">Tambah Keranjang
                        <i class="fas fa-cart-plus"></i></button>
                </div>
                </form>
                {{-- <div class="col-lg-3 mt-3">
                    <button type="button" class="btn btn-success form-control">Beli Sekarang
                        <i class="fas fa-arrow-right"></i></button>
                    </div> --}}
            </div>
        </div>
    </section>

    <section id="Ulasan">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h2>Ulasan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <img src="./asset/User L.png" alt="">
                </div>
                <div class="col-lg-8 ml-5">
                    <h5>Budi Hartono</h5>
                    <h6>Barang Sangat Baik</h6>
                    <div class="fas fa-star"></div>
                    <div class="fas fa-star"></div>
                    <div class="fas fa-star"></div>
                    <div class="fas fa-star"></div>
                    <div class="far fa-star"></div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-1">
                    <img src="./asset/User L.png" alt="">
                </div>
                <div class="col-lg-8 ml-5">
                    <h5>Budi Hartono</h5>
                    <h6>Barang Sangat Baik</h6>
                    <div class="fas fa-star"></div>
                    <div class="fas fa-star"></div>
                    <div class="fas fa-star"></div>
                    <div class="fas fa-star"></div>
                    <div class="far fa-star"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container">
            <div class="row mt-5">
                <div class="col mt-3">
                    <h1 class="">
                        Produk Promo
                    </h1>
                </div>
                <div class="col mt-4">
                    <a href="ListProduct.html">
                        <p class="teks" style="font-weight: bold; color: black;">
                            Lihat
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
            </div>
            <div class="owl-carousel">
                <div class="row">
                    <div class="col-md-3 mr-0">
                        <div class="card">
                            <a href="DetailProduct.html" style="color: black;">
                                <img src="./asset/photo-1612902377756-414b2139d5e2-removebg-preview.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title m-1">Sepatu Nike</h5>
                                    <p class="card-text m-1">Nike</p>
                                    <p style="font-weight: bold;" class="m-1">Rp. 2.500.000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mr-0">
                        <div class="card">
                            <a href="DetailProduct.html" style="color: black;">
                                <img src="./asset/bg-handphone-removebg-preview.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title m-1">Handphone</h5>
                                    <p class="card-text m-1">Samsung</p>
                                    <p style="font-weight: bold;" class="m-1">Rp. 2.000.000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mr-0">
                        <div class="card">
                            <a href="DetailProduct.html" style="color: black;">
                                <img src="./asset/bg-laptop-removebg-preview.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title m-1">Laptop</h5>
                                    <p class="card-text m-1">Asus</p>
                                    <p style="font-weight: bold;" class="m-1">Rp. 6.500.000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mr-0">
                        <div class="card">
                            <a href="DetailProduct.html" style="color: black;">
                                <img src="./asset/promo3-removebg-preview.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title m-1">Kamera</h5>
                                    <p class="card-text m-1">Cannon</p>
                                    <p style="font-weight: bold;" class="m-1">Rp. 5.500.000</p>
                                </div>
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
                        <img src="{{ asset('asset/2626270.png') }}" height="50px" width="50px">
                        <img src="{{ asset('asset/2504903.png') }}" height="50px" width="50px">
                        <img src="{{ asset('asset/3670127.png') }}" height="50px" width="50px">
                    </p>
                </div>
            </div>
            <hr style="border: 1px solid white  ;">
            <div class="row">
                <div class="col">
                    <p class="copyright ml-1" style="color: white;">Copyright<img
                            src="{{ asset('asset/503013.png') }}" style="color: white;"> 2020 <span>SynaStore</span>,
                        All Right Reserved</p>
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
