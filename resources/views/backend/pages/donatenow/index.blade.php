@extends('backend.master')

@section('title')
Data List - Donate Now Section
@endsection

@section('css')
<style>
*, ::after, ::before {
    box-sizing: none;
    border: none;
}
</style>

@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 lead">Donate Now Section</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('webhome') }}">Home</a></li>
                    <li class="breadcrumb-item active">Donate Now Section</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between ">
                            <h3 class="card-title"><strong>Data List</strong>
                            </h3>
                            @foreach ( $alldata as $key => $data )
                            <a target="_self"  href="{{ route('donatenow.edit',$data->id) }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                                Update Data</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Cause</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->cause }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$data->image)}}" style="width:60px;height:30px" alt="">
                                    </td>
                                    <td>{{ $data->description }}</td>
                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('donatenow.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between ">
                            <h3 class="card-title"><strong>Donation Numbers</strong>
                            </h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Bkash</th>
                                    <th>Rocket</th>
                                    <th>Nagad</th>
                                    <th>Bank</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->bkash }}</td>
                                    <td>{{ $data->rocket }}</td>
                                    <td>{{ $data->nagad }}</td>
                                    <td>{{ $data->bank }}</td>
                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('donatenow.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12-->
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between ">
                            <h3 class="card-title"><strong>All Logos</strong>
                            </h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Bkash Logo</th>
                                    <th>Rocket Logo</th>
                                    <th>Nagad Logo</th>
                                    <th>Bank Logo</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$data->bkash_logo)}}" style="width:60px;height:30px" alt="">
                                    </td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$data->rocket_logo)}}" style="width:60px;height:30px" alt="">
                                    </td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$data->nagad_logo)}}" style="width:60px;height:30px" alt="">
                                    </td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/donatenow/'.$data->bank_logo)}}" style="width:60px;height:30px" alt="">
                                    </td>
                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('donatenow.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

