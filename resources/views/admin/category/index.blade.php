@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} List | SCMS
@endsection
@section('styles')
<link href="{{ asset('assets/cms/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $_panel }} List</h3>
        <a href="{{route( $_base_route.'.create' )}}" style="float: right" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Add {{ $_panel }} </a>&nbsp;

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Title </th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $data['rows'] as $key=> $row)
                <tr>
                    <td>{{ $key+1}}.</td>
                    <td>{{ $row->title }}</td>
                    <td>{!! strip_tags(mb_strimwidth($row->description, 0, 200, "...")) !!}</td>
                    <td> {{ date('F d, Y', strtotime($row->created_at)) }}</td>
                    <td><span class="badge badge-{{ ($row->status == 1) ? 'success' : 'warning'}} badge-pill m-r-5 m-b-5">{{ ($row->status == 1) ? 'Published' : 'Unpublished'}}</span></td>
                    <td>
                        <a href="{{ route($_base_route.'.edit', ['id' => $row->id]) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route($_base_route.'.delete', ['id' => $row->id]) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Detete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</script>
<script type="text/javascript">
    $(function() {
        $("#example-table").DataTable();

    });
</script>
@endsection