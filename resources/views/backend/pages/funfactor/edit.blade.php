@extends('backend.master')

@section('title')
Update Data - FunFactor Section
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0 lead"> Update Fun Factors </h1>
                <a href="{{ route('funfactor.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                    @if ($show->id == '1/edit')

                    <form action="{{ route('funfactor.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" class="form-control" name="icon" value="{{ $show->icon }}">
                          </div>

                          <div class="form-group">
                            <label for="">Counter</label>
                            <input type="text" class="form-control" name="counter" value="{{ $show->counter }}">
                          </div>

                          <div class="form-group">
                            <label for="">Project</label>
                            <input type="text" class="form-control" id="" name="project" value="{{ $show->project }}">
                          </div>
                          <div class="form-group">
                            <div class="mb-4">
                                <label for="">Previous Image</label><br>
                                <img src="{{asset('backend/img/app_image/fun_factor/'.$show->bg_image)}}" style="width:270px;height:160px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Update Image </label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-block btn-success">Update</button>
                        </div>
                    </form>
                    @else
                    <form action="{{ route('funfactor.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" class="form-control" name="icon" value="{{ $show->icon }}">
                          </div>

                          <div class="form-group">
                            <label for="">Counter</label>
                            <input type="text" class="form-control" name="counter" value="{{ $show->counter }}">
                          </div>

                          <div class="form-group">
                            <label for="">Project</label>
                            <input type="text" class="form-control" id="" name="project" value="{{ $show->project }}">
                          </div>
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-block btn-success">Update</button>
                        </div>
                    </form>
                    @endif
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
