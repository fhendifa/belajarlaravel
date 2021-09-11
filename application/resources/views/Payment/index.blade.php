@extends('templateendgame.master')
@section('title', 'Payment')

@section('content')

    <section id="payment">
        <div class="container">
            <div class="row text-center">
                <center>
                    <h2><b>Metode Pembayaran</b></h2>
                </center>
            </div>
            <br>

            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>No. Invoice</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b>{{ $transaction[0]->no_invoice }}</b></h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Batas Waktu Pembayaran</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b> 12.00 WIB</b></h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b> 12 / 11 / 2021</b></h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Transfer Bank</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b>{{ $transaction[0]->bank->no_rek }}</b></h2>
                    </div>
                    <div class="col-lg-3">
                        <center>
                            <button type="button" class="btn btn-outline-warning">Salin</button>
                        </center>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Total Belanja</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2><b>{{ $transaction[0]->total }}</b></h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Ongkir</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2><b>{{ $transaction[0]->kurir->ongkir }}</b></h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Total Pembayaran</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b>{{ $transaction[0]->total + $transaction[0]->kurir->ongkir }}</b></h2>
                    </div>
                    <div class="col-lg-3">
                        <center>
                            <button type="Submit" class="btn btn-outline-warning">Salin</button>
                        </center>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row text-center">
                    <form action="{{url('/transaction/'. $transaction[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="struk" name="struk">
                            <br>
                            <button type="submit" class="btn btn-outline-dark">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
