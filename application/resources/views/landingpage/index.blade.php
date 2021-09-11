@extends('templateendgame.master')
@section('title', 'PasarKito')

@section('content')

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
                            <img src="{{asset('./asset/person-1-removebg-preview.png')}}">
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
                                    <img src="{{ asset('dist/img/' . $item->icon) }}" width="50" height="50" alt="...">
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
                                    @if ($item->photo == null)
                                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" class="card-img-top"
                                            alt="...">
                                    @else
                                        <img src="{{ asset('dist/img/' . $item->photo->nama_foto) }}" class="card-img-top"
                                            alt="...">
                                    @endif
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

    <section id="produk">
        <div class="container">
            <div class="row">
                <div class="col mt-3">
                    <h1 class="">
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
                    @foreach ($rekomendasi as $item)
                        <div class="col-md-3 mr-0">
                            <div class="card">
                                <a href="{{ url('/rekomendasi/' . $item->id) }}" style="color: black;">
                                    @if ($item->photo == null)
                                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" class="card-img-top"
                                            alt="...">
                                    @else
                                        <img src="{{ asset('dist/img/' . $item->photo->nama_foto) }}"
                                            class="card-img-top" alt="...">
                                    @endif
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
                    @foreach ($promo as $item)
                        <div class="col-md-3 mr-0">
                            <div class="card">
                                <a href="{{ url('/promo/' . $item->id) }}" style="color: black;">
                                    <img src="{{ asset('dist/img/' . $item->photo->nama_foto) }}" class="card-img-top"
                                        alt="...">
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

@endsection