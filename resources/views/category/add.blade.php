@extends('template.master')
@section('title', 'Add Category')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/category')}}">Category</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add <small>Category</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{url('/category')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kategori">Category Name</label>
                                            <div class="form-group">
                                              <label for="exampleFormControlFile1"></label>
                                              <input type="file" class="form-control-file" name="icon" id="exampleFormControlFile1">
                                            </div>
                                        <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                            value="{{old('kategori')}}" placeholder="Enter New Category">
                                        @error('kategori')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                            Coba Lagi
                                        </div>
                                        @enderror
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
                    <div>

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
