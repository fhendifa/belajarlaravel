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
                    <img src="./asset/Capture-removebg-preview.png">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="col-lg-6 mt-2">
                            <input class="form-control" type="text" placeholder="Belanjo Apo.....">
                        </div>
                        <div class="col-lg-1 mt-2">
                            <a href="">
                                <img src="./asset/3239958.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-1 mt-2">
                            <a href="Keranjang.html">
                                <img src="./asset/2832495.png" alt="">
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
                <!-- modallogin -->
                <div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/logincus') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone
                                            else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            aria-describedby="passwordHelpBlock">
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            Your password must be 8-20 characters long, contain letters and numbers, and
                                            must not
                                            contain spaces, special characters, or emoji.
                                        </small>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir modallogin -->

                <!-- awak modalregister -->
                <div class="modal fade" id="modalregister" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/registercus') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="name">Full name</label>
                                            <input type="text" class="form-control" placeholder="Full Name" id="name"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" id="email"
                                                name="email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" placeholder="Password"
                                                id="password" name="password">
                                            <div class="input-group-append">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-row">
                                        <div class="col-md-10">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" placeholder="Address" id="address"
                                                name="address">
                                        </div>
                                    </div> --}}
                                    <div class="row mt-3">
                                        <div class="col">
                                            <button class="btn btn-warning" type="submit">Register Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir modalregister -->
            </div>
        </div>
    </section>

    <section id="header">
        <div class="container mt-3">
            <div class="owl-carousel owl-theme">
                <div class="bg_baner">
                    <div class="row">
                        <div class="col-lg-5">
                            <p class="text-center">Get the best product at your home</p>
                            <a href="https://www.tokopedia.com/" class="btn btn-outline-light text-left">Lihat
                                Barang
                                <i class="fas fa-arrow-right ml-4"></i>
                            </a>
                        </div>
                        <div class="col-lg-7 d-none d-sm-block">
                            <img src="./asset/person-1-removebg-preview.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kategori">
        <div class="container">
            <div class="bg_kategori">
                <div class="row mt-3">
                    <div class="col">
                        <h1>
                            Ketegori Pilihan
                        </h1>
                    </div>
                    <div class="col mt-2">
                        <p class="teks">
                            <a href="Kategori.html" style="font-weight: bold; color: black;">
                                Lihat
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="owl-carousel">
                    <div class="row text-center">
                        @foreach ($category as $item)
                            <div class="col-lg-2 mt-4">
                                <a href="{{ url('/list/' . $item->id) }}" style="color: black;">
                                    <img src="{{ asset('dist/img/' . $item->icon) }}" width="50" height="50"
                                        alt="...">
                                    <h5>{{ $item->name }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container">
            <div class="row mt-3">
                <div class="col mt-3">
                    <h1>
                        Produk Pilihan
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
                    @foreach ($product as $item)
                        <div class="col-md-3 mr-0">
                            <div class="card">
                                <a href="{{ url('/detail/' . $item->id) }}" style="color: black;">
                                    <img src="{{ asset('dist/img/' . $item->photo->nama_foto) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-1">{{ $item->nama_barang }}</h5>
                                        <p style="font-weight: bold;" class="m-1">{{ $item->harga_barang }}</p>
                                        <p style="color: gold;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section id="rekomendasi">
        <div class="container">
            <div class="row">
                <div class="col mt-3">
                    <h1>
                        Produk Rekomendasi
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
                    <div class="col-md-4 mr-0">
                        <div class="card">
                            <a class="tas" href="DetailProduct.html" style="color: black;">
                                <img src="./asset/photo-1612902377756-414b2139d5e2-removebg-preview.png"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title m-1">Sepatu Nike</h5>
                                    <p class="card-text m-1">Nike</p>
                                    <p style="font-weight: bold;" class="m-1">Rp. 2.500.000</p>
                                    <p style="color: gold;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mr-0">
                    <div class="card">
                        <a href="DetailProduct.html" style="color: black;">
                            <img src="./asset/bg-handphone-removebg-preview.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title m-1">Handphone</h5>
                                <p class="card-text m-1">Samsung</p>
                                <p style="font-weight: bold;" class="m-1">Rp. 2.000.000</p>
                                <p style="color: gold;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mr-0">
                <div class="card">
                    <a href="DetailProduct.html" style="color: black;">
                        <img src="./asset/promo3-removebg-preview.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title m-1">Kamera</h5>
                            <p class="card-text m-1">Cannon</p>
                            <p style="font-weight: bold;" class="m-1">Rp. 5.500.000</p>
                            <p style="color: gold;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container">
            <div class="row">
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
                    <img src="./asset/Capture-removebg-preview.png" class="mt-3 ml-2">
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
                        <img src="./asset/2626270.png" height="50px" width="50px">
                        <img src="./asset/2504903.png" height="50px" width="50px">
                        <img src="./asset/3670127.png" height="50px" width="50px">
                    </p>
                </div>
            </div>
            <hr style="border: 1px solid white  ;">
            <div class="row">
                <div class="col">
                    <p class="copyright ml-1" style="color: white;">Copyright<img src="./asset/503013.png"
                            style="color: white;"> 2020 <span>SynaStore</span>, All Right Reserved</p>
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
