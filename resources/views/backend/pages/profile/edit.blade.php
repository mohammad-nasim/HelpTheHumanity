@extends('backend.master')

@section('title')
Update Data - Admin Data
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0 lead">Update Admin Data</h1>
                <a href="{{ route('profile.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                    <form action="{{ route('profile.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf

                        <div class="card-body">

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $show->name }}">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $show->email }}" >
                            </div>

                            @if (Auth::user()->role == 'Admin')
                            <div class="form-group">
                                <label for="">Role (Admin 0r Editor)</label>
                                <input type="text" class="form-control" name="role" value="{{ $show->role }}" >
                            </div>
                            @endif

                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="">Previous Image</label><br>
                                    <img src="{{asset('backend/img/app_image/profile_pictures/'.$show->image)}}" style="width:360px;height:180px" alt="">
                                </div>
                              <div class="form-group">
                                  <label for="exampleFormControlFile1">Upload Image </label>
                                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Change Your Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password">
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
