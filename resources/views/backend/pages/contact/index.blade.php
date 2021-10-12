@extends('backend.master')

@section('title')
Data List - Contact Section
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
                <h1 class="m-0 lead">Contact Section</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('webhome') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Section</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">

        {{-- data --}}
        <div class="row ">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between ">
                            <h3 class="card-title"><strong>Data List</strong></h3>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0 ">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->first_name }}</td>
                                    <td>{{ $data->last_name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->message }}</td>


                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('contact.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1"></a>


                                         <form action="{{ route('contact.destroy', $data->id) }}" method="POST" >
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

