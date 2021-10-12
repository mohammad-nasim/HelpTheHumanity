@extends('backend.master')

@section('title')
View Single Data - Payment Method Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Payment Mehtod Data</h1>
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
                    <div class="card-body">
                        <div class=" table-responsive">
                           <table class="table table-striped">
                                <tr>
                                    <th >Cause : </th>
                                    <td>
                                       {{ $show->cause? $show->cause->cause:'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th >Bkash: </th>
                                    <td>{{ $show->bkash}}</td>
                                </tr>
                                <tr>
                                    <th >Rocket: </th>
                                    <td>{{ $show->rocket}}</td>
                                </tr>
                                <tr>
                                    <th >Nagad: </th>
                                    <td>{{ $show->nagad}}</td>
                                </tr>
                                <tr>
                                    <th >Reference: </th>
                                    <td>{{ $show->reference}}</td>
                                </tr>
                                <tr>
                                    <th >Bank: </th>
                                    <td>{{ $show->bank}}</td>
                                </tr>

                           </table>
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




