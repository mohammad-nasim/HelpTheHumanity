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
                <h1 class="m-0 lead">Profile Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
                                        <h3 class="widget-user-username">{{ Auth::user()->name }}'s Profile</h3>
                                        <span></span>
                                      </div>
                                      <div class="widget-user-image mb-5" >
                                        <img class="profile-user-img img-fluid " style="width: 100px; height: 100px; border-radius: 50%;" src="{{ asset('backend/img/app_image/profile_pictures/'.Auth::user()->image ) }}" alt="User profile picture">
                                      </div>
                                      <div class="card-footer">
                                        <div class="row">
                                          <div class="col-sm-3 border-right">
                                            <div class="description-block">
                                              <h5 class="description-header"><i class="fas fa-user"></i></h5>
                                              <span class="description-text">{{ Auth::user()->name }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-3 border-right">
                                            <div class="description-block">
                                              <h5 class="description-header"><i class="fa fa-envelope" aria-hidden="true"></i></h5>
                                              <span class="description-text">{{ Auth::user()->email }}</span>
                                            </div>

                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-3">
                                            <div class="description-block">
                                              <h5 class="description-header"><i class="fa fa-tasks" aria-hidden="true"></i></h5>
                                              <span class="description-text">{{ Auth::user()->role }}</span>
                                            </div>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-3">
                                            <div class="description-block">
                                            @if ( Auth::user()->role == 'Admin')
                                              <a href="{{ route('profile.create') }}" class="btn btn-danger">
                                                <i class="fas fa-user-plus"></i> Create Admin
                                              </a>
                                            @else
                                                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                                <i class="fas fa-user-plus"></i> Back To Dashboard
                                                </a>
                                            @endif
                                            </div>
                                            <!-- /.description-block -->
                                          </div>
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
                        <div class="table-responsive">
                        <table class="table table-striped ">
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

                                        @if ($data->email == Auth::user()->email)
                                        <span class="badge badge-pill badge-success">Active</span>
                                        @endif
                                    </td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/profile_pictures/'.$data->image)}}" style="width: 50px; height:50px" alt="">
                                    </td>
                                    <td class="d-flex" style="width: 120px">

                                        @if (Auth::user()->role != 'Admin' )
                                            @if ($data->email == Auth::user()->email)
                                            <a href="{{ route('profile.edit',$data->id) }}" class="btn btn-sm btn-success fa fa-edit text-white mr-1"></a>

                                            <a href="{{ route('profile.delete',$data->id) }}" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger text-white mr-1">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            @endif
                                        @else
                                        <a href="{{ route('profile.edit',$data->id) }}" class="btn btn-sm btn-success fa fa-edit text-white mr-1"></a>

                                        <a href="{{ route('profile.delete',$data->id) }}" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger text-white mr-1">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
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

