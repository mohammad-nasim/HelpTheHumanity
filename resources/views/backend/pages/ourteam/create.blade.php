@extends('backend.master')

@section('title')
Create Data - Our Team
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0"></h1>
                <a href="{{ route('ourteam.index') }}" class="btn btn-primary"> <i class="fas fa-left-arrow"></i> Back</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <!-- /.card -->
                <div class="card card-white">
                    <div class="card-header">
                      <h3 class="card-title text-dark strong"><strong>Insert Feature Data</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">

                    <!-- form start -->
                    <form action="{{ route('ourteam.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Position">
                          </div>
                          <div class="form-group">
                            <label for="">Position</label>
                            <input type="text" class="form-control" id="" name="position" placeholder="Enter Position ">
                          </div>
                          <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image </label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="">Link One</label>
                            <input type="text" class="form-control" id="" name="linkone" placeholder="Enter Link One ">
                          </div>
                          <div class="form-group">
                            <label for="">Link Two</label>
                            <input type="text" class="form-control" id="" name="linktwo" placeholder="Enter Link Two ">
                          </div>
                          <div class="form-group">
                            <label for="">Link Three</label>
                            <input type="text" class="form-control" id="" name="linkthree" placeholder="Enter Link Three ">
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
