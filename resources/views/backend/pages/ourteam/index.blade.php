@extends('backend.master')

@section('title')
Data List - Our Team Section
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
                <h1 class="m-0 lead">Our Team section</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('webhome') }}">Home</a></li>
                    <li class="breadcrumb-item active">Our Team Section</li>
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
                            <h3 class="card-title"><strong>Data List</strong></h3>
                            <a target="_self"  href="{{ route('ourteam.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                                Create Member</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Image</th>
                                    <th>Link One</th>
                                    <th>Link Two</th>
                                    <th>Link Three</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->position }}</td>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/our_team/'.$data->image)}}" style="width:60px;height:30px" alt="">
                                    </td>
                                    <td>{{ $data->linkone }}</td>
                                    <td>{{ $data->linktwo }}</td>
                                    <td>{{ $data->linkthree }}</td>

                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('ourteam.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1"></a>

                                        <a href="{{ route('ourteam.edit',$data->id) }}" class="btn btn-sm btn-success fa fa-edit text-white mr-1"></a>

                                         {{-- <a href="{{ route('herosection.destroy', $data->id) }}" class="fa fa-trash text-danger"></a> --}}

                                         <form action="{{ route('ourteam.destroy', $data->id) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"

                                            onclick="return confirm('Are you sure you want to delete this item')"">
                                                <i class=" fa fa-trash text-white"></i>
                                            </button>
                                        </form>
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

