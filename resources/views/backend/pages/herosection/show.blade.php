@extends('backend.master')

@section('title')
View Single Data - Hero Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Title-Slogans & Slider Images</h1>
                <a href="{{ route('herosection.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                                    <th >Title : </th>
                                    <td >{{ $show->title }}</td>
                                </tr>
                                <tr>
                                    <th >Slogan One : </th>
                                    <td>{{ $show->slogan_1}}</td>
                                </tr>
                                <tr>
                                    <th >Slogan Two : </th>
                                    <td>{{ $show->slogan_2 }}</td>
                                </tr>
                                <tr>
                                    <th >Slider Image One : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/hero_section/'.$show->image_1)}}" style="width:400px;height:250px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Slider Image Two: </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/hero_section/'.$show->image_2)}}" style="width:400px;height:250px" alt="">
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




