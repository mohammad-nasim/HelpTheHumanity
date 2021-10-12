@extends('backend.master')

@section('title')
View Single Data - News Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View News Data</h1>
                <a href="{{ route('news.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                                    <th >Image : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/news/'.$show->image)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Title: </th>
                                    <td>{{ $show->title}}</td>
                                </tr>
                                <tr>
                                    <th >Date : </th>
                                    <td>{{ Carbon\Carbon::parse( $show->post_time )->toFormattedDateString() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th >Description : </th>
                                    <td>{{ $show->description }}</td>
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




