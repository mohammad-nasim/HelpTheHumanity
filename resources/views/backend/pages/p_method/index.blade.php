@extends('backend.master')

@section('title')
Data List - Payment Method Section
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
                <h1 class="m-0 lead">
                    Payment Method Section
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('webhome') }}">Home</a></li>
                    <li class="breadcrumb-item active">Payment Method Section</li>
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
                            <a target="_self"  href="{{ route('paymentmethod.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                                Add Method</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Cause</th>
                                    <th>Bkash</th>
                                    <th>Rocket</th>
                                    <th>Nagad</th>
                                    <th>Reference</th>
                                    <th>Bank Details</th>
                                    <th style="width: 20px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $alldata as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        {{ $data->cause ? $data->cause->cause: ""}}
                                    </td>
                                    <td>{{ $data->bkash }}</td>
                                    <td>{{ $data->rocket }}</td>
                                    <td>{{ $data->nagad }} </td>
                                    <td>{{ $data->reference }}</td>
                                    <td>{{ $data->bank }}</td>
                                    <td class="d-flex" style="width: 120px">
                                        <a href="{{ route('paymentmethod.show', $data->id) }}" class=" btn btn-sm btn-primary fa fa-eye mr-1"></a>

                                        <a href="{{ route('paymentmethod.edit',$data->id) }}" class="btn btn-sm btn-success fa fa-edit text-white mr-1"></a>

                                         <form action="{{ route('paymentmethod.destroy', $data->id) }}" method="POST" >
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

