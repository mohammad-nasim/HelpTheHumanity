@extends('backend.master')

@section('title')
Update Data - Footer Section
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="m-0"></h1>
                <a href="{{ route('footer.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                    <form action="{{ route('footer.update', $show->id) }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        @method('put')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Footer Text</label>
                            <input type="text" class="form-control" name="footer_text" id="" value="{{ $show->footer_text }}">
                          </div>
                          <div class="form-group">
                            <label for="">Link One</label>
                            <input type="text" class="form-control" name="link_one" id="" value="{{ $show->link_one }}">
                          </div>
                          <div class="form-group">
                            <label for="">Link Two</label>
                            <input type="text" class="form-control" name="link_two" id="" value="{{ $show->link_two }}">
                          </div>
                          <div class="form-group">
                            <label for="">Link Three</label>
                            <input type="text" class="form-control" name="link_three" id="" value="{{ $show->link_three }}">
                          </div>
                          <div class="form-group">
                            <label for="">Link Four</label>
                            <input type="text" class="form-control" name="link_four" id="" value="{{ $show->link_four }}">
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
