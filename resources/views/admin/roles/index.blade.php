@extends('layouts.admin')
@section('styles')
<link href="{{ asset('assets/cms/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4  text-primary">Role List</h1>
        <a href="{{route('admin.roles.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Create New Role</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table" id="example-table" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">S.N </th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data['roles'])
                    @foreach($data['roles'] as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                            <a href="{{ route('admin.roles.edit', ['id' => $row->id])}}" class="btn btn-warning btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.roles.delete', ['id' => $row->id])}}" class="btn btn-round btn-danger btn-xs" onClick="return confirm('Do you want to delete??')">
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