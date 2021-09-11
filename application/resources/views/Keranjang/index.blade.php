@extends('templateendgame.master')
@section('title', 'Cart Product')

@section('content')

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
                                    <img src="{{ asset('dist/img/' . $item->product->photo->nama_foto) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 text-center">
                                <h5 class="card-title m-1">{{ $item->product->nama_barang }}</h5>
                                <p style="font-weight: bold;" class="m-1">
                                    <b>Rp.</b>{{ $item->product->harga_barang }}
                                </p>
                            </div>
                            <div class="col-lg-2 text-center">
                                <h5><b>{{ $item->quantity }}</b></h5>
                            </div>
                            <div class="col-lg text-center">
                                <div class="bg_icon">
                                    <form action="{{ url('/cart/' . $item->id) }}" method="POST">
                                        <button type="submit" class="btn btn-outline-success">
                                            @csrf
                                            @method('delete')
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5">
                <form method="POST" action="{{ url('/transaction') }}">
                    @csrf
                    <input type="hidden" id="subtotal" name="subtotal" value="{{ $subtotal }}">
                    <div class="form-group">
                        <label for="alamat" style="font-weight: bold;">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat"
                            placeholder="Masukkan Alamat....">
                    </div>
                    <div class="bg_detail p-3">
                        <h6>Subtotal <span><b>Rp.</b>{{ $subtotal }}</span></h6>
                        <hr>
                        <h6>Kurir
                            <span>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <select name="kurir" id="kurir">
                                            @foreach ($kurir as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->nama_kurir }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </span>
                        </h6>
                        <hr>
                        <h6>Bank Transfer
                            <span>
                                <select name="bank" id="bank">
                                    @foreach ($bank as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama_bank }}
                                        </option>
                                    @endforeach
                                </select>
                            </span>
                        </h6>
                        <hr>
                        <button type="submit" class="btn btn-primary mt-4">
                            Bayar Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
