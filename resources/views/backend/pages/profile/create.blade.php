@extends('backend.master')

@section('title')
Create An Admin
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">Create an Admin </h1>
                <a href="{{ route('profile.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left" ></i> Back</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card card-white">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <span class=" text-dark strong"><strong>Insert Data</strong></span>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">

                    <!-- form start -->
                    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Admin's Name">
                          </div>
                          <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="" name="email" placeholder="Enter Email Address ">
                          </div>
                          <div class="form-group">
                            <label for="">Role</label>
                            <input type="text" class="form-control" name="role" placeholder="Only Admin or Editor">
                          </div>
                          <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Add a Password">
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12-->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('js')
<script>
    $('#form-id')[0].reset();
</script>
@endsection
