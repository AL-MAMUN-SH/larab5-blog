@extends('layouts.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('author.index') }}">Authors</a></li>
            <li class="breadcrumb-item active">New author</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add new Author</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('author.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        @include('admin.author._form')
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="picture">PICTURE</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label for="post">Total Post</label>
                        <textarea name="total_post" id="post" cols="30" rows="3"></textarea>
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
    </div>
@endsection
