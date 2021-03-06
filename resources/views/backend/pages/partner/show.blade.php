@extends('backend.master')

@section('title')
View Single Data - Partners
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Partner's Logo</h1>
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
                    <div class="card-body">
                        <div class=" table-responsive">
                           <table class="table table-striped">
                                <tr>
                                    <th >Background Image : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->bg_image)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Logo One : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_one)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Logo Two : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_two)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Logo Three : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_three)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Logo Four : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/partner/'.$show->image_four)}}" style="width:230px;height:150px" alt="">
                                    </td>
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




