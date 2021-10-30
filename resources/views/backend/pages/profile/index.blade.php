@extends('backend.master')

@section('title')
Profile - Admin
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
                <h1 class="m-0 lead">Pofile Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('webhome') }}">Home</a></li>
                    <li class="breadcrumb-item active">Admin Profile Section</li>
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
                            <h3 class="card-title"><strong></strong>
                            </h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="card card-widget widget-user">
                                      <!-- Add the bg color to the header using any of the bg-* classes -->
                                      <div class="widget-user-header bg-info">
                                        <h3 class="widget-user-username">Admin Profile</h3>
                                        <span></span>
                                      </div>
                                      <div class="widget-user-image mb-5">
                                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('backend/img/app_image/profile_pictures/'.Auth::user()->image ) }}" alt="User profile picture">
                                      </div>
                                      <div class="card-footer">
                                        <div class="row">
                                          <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                              <h5 class="description-header"><i class="fas fa-user"></i></h5>
                                              <span class="description-text">{{ Auth::user()->name }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                              <h5 class="description-header"><i class="fa fa-envelope" aria-hidden="true"></i></h5>
                                              <span class="description-text">{{ Auth::user()->email }}</span>
                                            </div>

                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-4">
                                            <div class="description-block">
                                              <h5 class="description-header"><i class="fa fa-tasks" aria-hidden="true"></i></h5>
                                              <span class="description-text">Admin</span>
                                            </div>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                      </div>
                                    </div>
                                    <!-- /.widget-user -->
                                  </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col-12-->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between ">
                            <h3 class="card-title"><strong>Manage Admin & Editors</strong></h3>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        {{

                                        $data->name

                                        }}
                                    </td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/profile_pictures/'.$data->image)}}" width="50px;height:50px" alt="">
                                    </td>
                                    <td class="d-flex" style="width: 120px">

                                        <a href="{{ route('profile.edit',$data->id) }}" class="btn btn-sm btn-success fa fa-edit text-white mr-1"></a>

                                        <a href="{{ route('profile.delete',$data->id) }}" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger text-white mr-1">
                                            <i class="fa fa-trash"></i>
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

                <!-- /.card -->
            </div>
            <!-- /.col-12-->
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection

