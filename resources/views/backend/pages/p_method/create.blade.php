@extends('backend.master')

@section('title')
Create Data - Payment Method
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0">Nasim</h1>
                <a href="{{ route('paymentmethod.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                      <h3 class="card-title text-dark strong"><strong>Insert Cause Data</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-12 col-md-8 col-md-6 offset-lg-2 offset-md-2">

                    <!-- form start -->
                    <form action="{{ route('paymentmethod.store') }}" method="post" enctype="multipart/form-data" id="form-id">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="">Select Cause:</label>
                                <select name="cause" class="form-control" id="sel1">
                                  <option selected >Select</option>
                                  @foreach ($cause as $key => $data )
                                    <option value="{{ $key }}">
                                    {{ $data }}
                                    </option>
                                  @endforeach
                                </select>
                              </div>

                            <div class="form-group">
                                <label for="">Bkash Number</label>
                                <input type="text" class="form-control" name="bkash" placeholder="Enter Bkash No.">
                            </div>

                            <div class="form-group">
                                <label for="">Rocket Number</label>
                                <input type="text" class="form-control" name="rocket" placeholder="Enter Rocket No.">
                            </div>

                            <div class="form-group">
                                <label for="">Nagad Number</label>
                                <input type="text" class="form-control" name="nagad" placeholder="Enter Nagad No.">
                            </div>

                            <div class="form-group">
                                <label for="">Reference</label>
                                <input type="text" class="form-control" name="reference" placeholder="Enter Referece">
                            </div>

                            <div class="form-group">
                              <label for="">Bank Details</label>
                              <div class="form-group">
                               <textarea name="bank" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
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
