@extends('backend.master')

@section('title')
Update Data - Partners
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0 lead">Update Partner's logo</h1>
                <a href="{{ route('partner.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                    <form action="{{ route('partner.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="form-group mb-5">
                            <div class="mb-4">
                                <label for="">Background Image</label><br>
                                <img src="{{asset('backend/img/app_image/partner/'.$show->bg_image)}}" style="width:360px;height:180px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Update Background Image </label>
                                <input type="file" name="bg_image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <!-- Grid -->
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group  ">
                                    <div class="mb-4 ">
                                        <label for="">Previous Logo 1</label><br>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_one)}}" style="width:310px;height:180px" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Update Image </label>
                                        <input type="file" name="image_one" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <div class="mb-4 ml-1 ">
                                        <label for="">Previous Logo 2</label><br>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_two)}}" style="width:310px;height:180px" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Update Image </label>
                                        <input type="file" name="image_two" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-4 ">
                                        <label for="">Previous Logo 3</label><br>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_three)}}" style="width:310px;height:180px" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Update Image </label>
                                        <input type="file" name="image_three" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-4 ml-1">
                                        <label for="">Previous Logo 4</label><br>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_four)}}" style="width:310px;height:180px" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Update Image </label>
                                        <input type="file" name="image_four" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                            <button type="submit" class="btn btn-block btn-success">Update</button>
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
