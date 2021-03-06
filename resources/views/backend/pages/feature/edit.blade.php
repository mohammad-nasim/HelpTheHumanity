@extends('backend.master')

@section('title')
Update Data - Feature Section
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0 lead">Update Feature Seciton</h1>
                <a href="{{ route('feature.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <span class=" text-dark strong"><strong>Update Data</strong></span>

                            <span class=" text-dark strong"><a href="https://fontawesome.com/v5.15/icons"><strong>Select an Icon <i class="fas fa-toolbox"></i></strong> </a></span>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">
                    <!-- form start -->
                    <form action="{{ route('feature.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" class="form-control" name="icon" value="{{ $show->icon }}">
                          </div>
                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" name="title" value="{{ $show->title }}">
                          </div>
                          <div class="form-group">
                            <div class="mb-4">
                                <label for="">Previous Image</label><br>
                                <img src="{{asset('backend/img/app_image/feature_section/'.$show->image)}}" style="width:280px;height:150px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Update Image </label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </div>

                            <div class="form-group">
                              <label for="">Description</label>
                              <div class="form-group">
                               <textarea name="description" class="form-control" id="summernote" cols="30" rows="10">
                                {!! $show->description !!}
                               </textarea>
                              </div>
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
