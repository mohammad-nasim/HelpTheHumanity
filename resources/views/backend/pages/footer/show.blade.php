@extends('backend.master')

@section('title')
View Single Data - Footer Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0 lead">View Footer Data</h1>
                <a href="{{ route('footer.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
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
                                    <th >Footer Text : </th>
                                    <td>{{ $show->footer_text }}</td>
                                </tr>
                                <tr>
                                    <th >Link One : </th>
                                    <td>{{ $show->link_one }}</td>
                                </tr>
                                <tr>
                                    <th >Link One : </th>
                                    <td>{{ $show->link_two }}</td>
                                </tr>
                                <tr>
                                    <th >Link One : </th>
                                    <td>{{ $show->link_three }}</td>
                                </tr>
                                <tr>
                                    <th >Link One : </th>
                                    <td>{{ $show->link_four }}</td>
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




