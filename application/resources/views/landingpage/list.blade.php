@extends('templateendgame.master')
@section('title', 'List Product')

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
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container">
            <div class="row mt-3">
                <div class="col mt-3">
                    <h1>
                        List Produk
                    </h1>
                </div>
            </div>
            <div class="owl-carousel">
                <div class="row">
                    <div class="col-md-3 mr-0">
                        <div class="card">
                            <a href="DetailProduct.html" style="color: black;">
                                <img src="{{asset('dist/img/'. $category->icon)}}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2>
                                        {{$category->name}}
                                    </h2>
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
            </div>
    </section>

@endsection
