@extends('backend.master')

@section('title')
Update Data - DonateNow
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0 lead">Update Donate Now Data</h1>
                <a href="{{ route('donatenow.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                    <form action="{{ route('donatenow.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Cause</label>
                            <input type="text" class="form-control" id="" name="cause" value="{{ $show->cause }}">
                          </div>
                          <div class="form-group">
                            <div class="mb-4">
                                <label for="">Previous Image</label><br>
                                <img src="{{asset('backend/img/app_image/donatenow/'.$show->image)}}" style="width:360px;height:180px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Update Image </label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" name="title" value="{{ $show->title }}">
                          </div>
                          <div class="form-group">
                              <label for="">Description</label>
                              <div class="form-group">
                               <textarea name="description" class="form-control" id="" cols="30" rows="10">
                                {{ $show->description }}
                               </textarea>
                              </div>
                          </div>

                          <div class="form-group">
                            <label for="">Reference</label>
                            <input type="text" class="form-control" id="" name="reference" value="{{ $show->reference }}">
                          </div>
                          <div class="form-group">
                            <label for="">Bkash No.</label>
                            <input type="text" class="form-control" id="" name="bkash" value="{{ $show->bkash }}">
                          </div>
                          <div class="form-group">
                            <label for="">Rocket No.</label>
                            <input type="text" class="form-control" id="" name="rocket" value="{{ $show->rocket }}">
                          </div>
                          <div class="form-group">
                            <label for="">Nagad No.</label>
                            <input type="text" class="form-control" id="" name="nagad" value="{{ $show->nagad }}">
                          </div>
                          <div class="form-group">
                            <label for="">Bank Details</label>
                            <input type="text" class="form-control" id="" name="bank" value="{{ $show->bank }}">
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
