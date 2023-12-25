@extends('layouts.admin.base', ['tile'=>'Service list'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Services</span>
        <span>
            <a href="{{route('admin.service.save')}}" class="btn btn-primary btn-sm">Add Service</a> 
        </span>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Active Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($services as $s)
                <tr>
                    <td>{{ $s->title }}</td>
                    <td>{{ $s->description }}</td>
                    <td>
                        {{ $s ? 'Active' : 'Inactive' }}
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary btn-edit" href="{{route('admin.service.save')}}?service_id={{$s->id}}">Edit</a>
                        <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection