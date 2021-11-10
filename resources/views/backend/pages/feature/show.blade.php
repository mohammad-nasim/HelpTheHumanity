@extends('backend.master')

@section('title')
View Single Data - Feature Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Feature Data</h1>
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
                    <div class="card-body">
                        <div class=" table-responsive">
                           <table class="table table-striped">
                                <tr>
                                    <th style="width: 15%">Image : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/feature_section/'.$show->image)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 15%">Icon: </th>
                                    <td>{{ $show->icon}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 15%">Title : </th>
                                    <td>{{ $show->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 15%">Description : </th>
                                    <td>{!! $show->description !!}</td>
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




