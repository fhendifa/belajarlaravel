@extends('template.master')
@section('tittle', 'Edit product')

@section('content')
    <section class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <h2>halaman tambah category</h2> --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/product') }}">Product</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit <strong>Product</strong></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('/product/' . $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="photo">Choose Photo Produtc</label>
                                        <input type="file" class="form-control-file" name="photo" id="photo">
                                        <img src="{{asset('dist/img'. $product->photo->nama_foto)}}" width="50" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Product Category</label>
                                        <select name="category" class="form-control @error('category') is-invalid @enderror"
                                            id="category" value="{{ old('category') }}"
                                            placeholder="Enter Product category">
                                            @foreach ($category as $item)
                                                @if ($item->id == $product->category_id)
                                                    <option value="{{ $product->category_id }}" selected>
                                                        {{ $item->name }}</option>
                                                @else
                                                    <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            value="{{ $product->nama_barang }}" placeholder="Enter Name Product">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Product Price</label>
                                        <input type="number" name="harga" min="0" max="1000000000000"
                                            class="form-control @error('harga') is-invalid @enderror" id="harga"
                                            value="{{ $product->harga_barang }}" placeholder="Enter Product Price">
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Product Stock</label>
                                        <input type="number" name="stock" min="0" max="10000"
                                            class="form-control @error('stock') is-invalid @enderror" id="stock"
                                            value="{{ $product->stock_barang }}" placeholder="Enter Product Stock">
                                        @error('stock')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Product Deskripsi</label>
                                        <textarea type="text" name="deskripsi"
                                            class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                            placeholder="Enter Product Description "> {{ $product->deskripsi_barang }} </textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- /.content-header -->
    </section>
@endsection
