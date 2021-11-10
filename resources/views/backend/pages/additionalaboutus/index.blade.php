@extends('backend.master')

@section('title')
Data List - Additional About Section
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
                <h1 class="m-0 lead">Addtion About Us Section</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Additional About Section</li>
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
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Title</th>
                                    <th>Cover Image</th>
                                    <th>Video Link</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><p class="text-justify">{{ \Illuminate\Support\Str::limit($data->description, 160)  }}</p></td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/add_about_us/'.$data->cover_image)}}" style="width:60px;height:30px" alt="">
                                    </td>

                                    <td>{{ $data->video_link }}</td>
                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('additionalaboutus.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1">
                                        </a>

                                        <a href="{{ route('additionalaboutus.edit',$data->id) }}" class="btn btn-sm btn-success fa fa-edit text-white mr-1"></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col-12-->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

