@extends('backend.master')

@section('title')
View Single Data - FunFactor Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View FunFactor's Data</h1>
                <a href="{{ route('funfactor.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                        @if ($show->id == '1')
                            <table class="table table-striped">
                                    <tr>
                                        <th >Background Image : </th>
                                        <td>
                                            <img src="{{asset('backend/img/app_image/fun_factor/'.$show->bg_image)}}" style="width:230px;height:150px" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th >Icon: </th>
                                        <td>{{ $show->icon}}</td>
                                    </tr>
                                    <tr>
                                        <th >Counter : </th>
                                        <td>{{ $show->counter }}</td>
                                    </tr>
                                    <tr>
                                        <th >Projects : </th>
                                        <td>{{ $show->project }}</td>
                                    </tr>
                            </table>
                        @else
                            <table class="table table-striped">
                                    <tr>
                                        <th >Icon: </th>
                                        <td>{{ $show->icon}}</td>
                                    </tr>
                                    <tr>
                                        <th >Counter : </th>
                                        <td>{{ $show->counter }}</td>
                                    </tr>
                                    <tr>
                                        <th >Projects : </th>
                                        <td>{{ $show->project }}</td>
                                    </tr>
                            </table>
                       @endif
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




