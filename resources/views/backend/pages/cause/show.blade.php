@extends('backend.master')

@section('title')
View Single Data - Cause Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Cause Data</h1>
                <a href="{{ route('cause.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                                        <img src="{{asset('backend/img/app_image/cause/'.$show->image)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Cause: </th>
                                    <td>{{ $show->cause}}</td>
                                </tr>
                                <tr>
                                    <th >Title: </th>
                                    <td>{{ $show->title}}</td>
                                </tr>
                                <tr>
                                    <th >Description : </th>
                                    <td>{{ $show->description }}</td>
                                </tr>
                                <tr>
                                    <th >Raised : </th>
                                    <td>{{ $show->raised }} TK</td>
                                </tr>
                                <tr>
                                    <th >Target : </th>
                                    <td>{{ $show->target }} Tk</td>
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




