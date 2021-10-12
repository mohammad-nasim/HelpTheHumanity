@extends('backend.master')

@section('title')
Add Images - Gallery Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">Upload Your Pictures</h1>
                <a href="{{ route('gallery.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left" ></i> Back</a>
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
                      <h3 class="card-title text-dark strong"><strong>Insert New Images</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">

                    <!-- form start -->
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">

                          <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Images</label>
                                <input type="file" name="image[]" class="form-control-file" id="exampleFormControlFile1" multiple>
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
