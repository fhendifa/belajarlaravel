{{-- @dd($kategori) --}}

@extends('template.master')
@section('tittle', 'Product')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Name</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col">
                    @if (session('status'))

                        <div class="alert alert-success">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> Data Product</h2>
                            <div class="text-right "><a href="{{ url('/product/create') }}" role="button"
                                    class="btn btn-success"><i class="fas fa-plus">Add Product</i></a></div>
                        </div>
                        <div class="card-body">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Photo</th>
                                            <th>Kategori</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Stock Barang</th>
                                            <th>Deskripsi Barang</th>
                                            <th>Promo</th>
                                            <th>Rekomendasi</th>
                                            <th>Terjual</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                @if ($item->photo == null)
                                                <td><img src="{{ asset('dist/img/user1-128x128.jpg') }}"
                                                    width="75" alt=""></td>
                                                @else
                                                <td><img src="{{ asset('dist/img/' . $item->photo->nama_foto) }}"
                                                        width="75" alt=""></td>
                                                @endif
                                                <td>{{ $item->category->name }}</td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->harga_barang }}</td>
                                                <td>{{ $item->stock_barang }}</td>
                                                <td>{{ $item->deskripsi_barang }}</td>
                                                <td><a href="{{url('/promo/'. $item->id)}}">{{ $item->promo = $item->promo == 1 ? 'active' : 'inactive' }}</a></td>
                                                <td><a href="{{url('/rekomendasi/'. $item->id)}}">{{ $item->rekomendasi = $item->rekomendasi == 1 ? 'active' : 'inactive' }}</a></td>
                                                <td>{{ $item->terjual }}</td>
                                                <td><a href="{{ url('/product/' . $item->id . '/edit') }}"
                                                        role="button" class="btn btn-success"><i
                                                            class="fas fa-edit">Edit</i></a>
                                                    <form action="{{ url('/product/' . $item->id) }}" method="POST"
                                                        role="button" class="btn btn-danger d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="far fa-times-circle">Delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
