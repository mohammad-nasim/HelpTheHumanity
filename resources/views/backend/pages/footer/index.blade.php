@extends('backend.master')

@section('title')
Data List - Footer Section
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
                <h1 class="m-0 lead">Footer Section</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Footer Section</li>
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
                            <a target="_self"  href="{{ route('footer.edit',$data->id) }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                                Update Data</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">SL</th>
                                        <th>Footer Text</th>
                                        <th>Link One</th>
                                        <th>Link Two</th>
                                        <th>Link Three</th>
                                        <th>Link Four</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $alldata as $key => $data )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->footer_text }}</td>
                                        <td>{{ $data->link_one }}</td>
                                        <td>{{ $data->link_two }}</td>
                                        <td>{{ $data->link_three }}</td>
                                        <td>{{ $data->link_four }}</td>

                                        <td class="d-flex" style="width: 120px">
                                            <a href="{{ route('footer.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1"></a>
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
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

