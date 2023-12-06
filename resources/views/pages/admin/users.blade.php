@extends('layouts.admin.base', ['title'=>'Users'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Users</span> 
        <button class="btn btn-sm btn-primary">Create User</button>
    </div>
    <div class="card-body">
        <table id="users-table" class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach( $users as $user )
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->format('d-m-Y, h:i a')}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

            <tfoot>

            </tfoot>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(`#users-table`).dataTable();
</script>
@endpush