@extends('layouts.admin')
@section('styles')
<link href="{{ asset('assets/cms/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4  text-primary">Users Management</h1>
        <a href="{{route('admin.users.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Create New User</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table" id="example-table" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Created</th>
                        <th scope="col"> Updated</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data)
                    @foreach($data as $key => $row)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{$row->name}} </td>
                        <td>{{ $row->email}}</td>
                        <td>
                            @if(!empty($row->getRoleNames()))
                            @foreach($row->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                            @endif
                        </td>
                        <td>{{ Carbon\Carbon::parse($row->created_at)->format('Y-m-d') }}</td>
                        <td>{{ Carbon\Carbon::parse($row->updated_at)->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', ['id' => $row->id])}}" data-original-title="Edit" data-toggle="tooltip" class="btn btn-warning btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.users.delete', ['id' => $row->id])}}" data-original-title="Delete" data-toggle="tooltip" class="btn btn-round btn-danger btn-xs" onClick="return confirm('Do you want to delete??')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/cms/vendors/DataTables/datatables.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                responsive: true

            });
        })
    });
</script>
@endsection