@extends('backend.master')

@section('title')
Create Data - Event Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0"></h1>
                <a href="{{ route('cause.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                      <h3 class="card-title text-dark strong"><strong>Insert Cause Data</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">

                    <!-- form start -->
                    <form action="{{ route('cause.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Cause</label>
                                <input type="text" class="form-control" name="cause" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image </label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                              <label for="">Description</label>
                              <div class="form-group">
                               <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Raised</label>
                                        <input type="text" class="form-control" id="" name="raised">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Target</label>
                                        <input type="text" class="form-control" id="" name="target">
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
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
