@extends('backend.master')

@section('title')
Update Data - Our Team Section
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0 lead">Out Team Seciton</h1>
                <a href="{{ route('ourteam.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                      <h3 class="card-title text-dark strong"><strong>Update Data</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">
                    <!-- form start -->
                    <form action="{{ route('ourteam.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" class="form-control" name="name"  value="{{ $show->name }}" >
                            </div>
                            <div class="form-group">
                              <label for="">Position</label>
                              <input type="text" class="form-control" id="" name="position" value="{{ $show->position }}"  >
                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="">Previous Image</label><br>
                                    <img src="{{asset('backend/img/app_image/our_team/'.$show->image)}}" style="width:260px;height:130px" alt="">
                                </div>
                              <div class="form-group">
                                  <label for="exampleFormControlFile1">Upload Image </label>
                                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="">Link One</label>
                              <input type="text" class="form-control" id="" name="linkone" value="{{ $show->linkone }} " >
                            </div>
                            <div class="form-group">
                              <label for="">Link Two</label>
                              <input type="text" class="form-control" id="" name="linktwo" value="{{ $show->linktwo }} ">
                            </div>
                            <div class="form-group">
                              <label for="">Link Three</label>
                              <input type="text" class="form-control" id="" name="linkthree" value="{{ $show->linkthree }}" >
                            </div>
                          </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-block btn-success">Update</button>
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
