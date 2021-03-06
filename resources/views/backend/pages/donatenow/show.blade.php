@extends('backend.master')

@section('title')
View Single Data - DonateNow
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Donate Now Data</h1>
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
                    <div class="card-body">
                        <div class=" table-responsive">
                           <table class="table table-striped">
                                <tr>
                                    <th style="width: 20%" >Image : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$show->image)}}" style="width:400px;height:250px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Cause : </th>
                                    <td>{{ $show->cause }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Title : </th>
                                    <td>{{ $show->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Description : </th>
                                    <td>{!! $show->description !!}  </td>
                                </tr>
                                <hr>
                           </table>
                        </div>

                    </div>
                </div>
                <!-- /.card -->
                <!-- /.card -->
                <div class="card card-white">
                    <div class="card-body">
                        <div class=" table-responsive">
                           <table class="table table-striped">
                                <tr>
                                    <th style="width: 20%" >Reference : </th>
                                    <td>{{ $show->reference }}</td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <th style="width: 20%" >Bkash Number : </th>
                                    <td>{{ $show->bkash }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$show->bkash_logo)}}" style="width:100px;height:50px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Rocket Number : </th>
                                    <td>{{ $show->rocket }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$show->rocket_logo)}}" style="width:100px;height:50px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Nagad Number : </th>
                                    <td>{{ $show->nagad }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$show->nagad_logo)}}" style="width:100px;height:50px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Bank : </th>
                                    <td>{{ $show->bank }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$show->bank_logo)}}" style="width:100px;height:50px" alt="">
                                    </td>
                                </tr>
                                <hr>
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




