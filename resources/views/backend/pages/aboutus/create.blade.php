@extends('backend.master')

@section('title')
Create Data - About Us Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0">Create About Data</h1>
                <a href="{{ route('aboutus.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i>  Back</a>
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
                      <h3 class="card-title text-dark strong"><strong>Insert About Data</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">

                    <!-- form start -->
                    <form action="{{ route('aboutus.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" name="title" placeholder="Enter Title ">
                          </div>
                          <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image </label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="">Description</label>
                              <div class="form-group">
                               <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
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
