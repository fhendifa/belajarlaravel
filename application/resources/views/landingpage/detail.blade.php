@extends('templateendgame.master')
@section('title', 'Detail Product')

@section('content')

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
                        IDR. {{ number_format ($product->harga_barang, 0,',','.') }}
                    </h4>
                    <p>
                        Stock Barang {{$product->stock_barang}}
                    </p>
                    <p>
                        Sudah Terjual {{$product->terjual}}
                    </p>
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

@endsection
