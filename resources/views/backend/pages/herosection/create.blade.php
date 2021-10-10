@extends('backend.master')

@section('title')
Create Data - Hero Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0"></h1>
                <a href="{{ route('herosection.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
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
                      <h3 class="card-title text-dark strong"><strong>Insert Data</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">
                                                <!-- form start -->
                    <form action="{{ route('herosection.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Slogan One</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="slogan_1" placeholder="Enter Slogan ">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Slogan Two</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="slogan_2" placeholder="Enter Slogan">
                          </div>
                          <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image One</label>
                                <input type="file" name="image_1" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image Two</label>
                                <input type="file" name="image_2" class="form-control-file" id="exampleFormControlFile1">
                              </div>
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
