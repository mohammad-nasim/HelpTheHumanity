@extends('backend.master')

@section('title')
View Single Data - Our Team Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Member's Data</h1>
                <a href="{{ route('ourteam.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                                        <img src="{{asset('backend/img/app_image/our_team/'.$show->image)}}" style="width:400px;height:250px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Name: </th>
                                    <td>{{ $show->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Position: </th>
                                    <td>{{ $show->position}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Link One : </th>
                                    <td>{{ $show->linkone }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Link Two : </th>
                                    <td>{{ $show->linktwo }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%" >Link Three : </th>
                                    <td>{{ $show->linkthree }}</td>
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




