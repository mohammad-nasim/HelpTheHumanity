@extends('backend.master')

@section('title')
View Single Data - Contact Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Message</h1>
                <a href="{{ route('contact.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                                    <th >First Name </th>
                                    <td>{{ $show->first_name}}</td>
                                </tr>
                                <tr>
                                    <th >Last Name </th>
                                    <td>{{ $show->last_name}}</td>
                                </tr>
                                <tr>
                                    <th >Email </th>
                                    <td>{{ $show->email}}</td>
                                </tr>
                                <tr>
                                    <th >Phone</th>
                                    <td>{{ $show->phone}}</td>
                                </tr>
                                <tr>
                                    <th >Message : </th>
                                    <td>{{ $show->message }}</td>
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




