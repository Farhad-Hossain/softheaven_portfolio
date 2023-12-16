@extends('layouts.admin.base', ['title'=>'Testimonilas'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Testimonials</span> 
        <button class="btn-sm btn-success" id="add-btn">Add</button>
    </div>

    <div class="card-body">
        @if($testimonials)
        <table class="table">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <tr>
                    @foreach($testimonials as $t)
                    <tr>
                        <td>
                            <img src="{{asset('storage')}}/{{$t->avatar}}" alt="">
                        </td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->designation}}</td>
                        <td>{{$t->organization}}</td>
                        <td>
                            @if($t->status)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">InActive</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tr>
            </thead>
        </table>
        @else
            @noDataAvailable
        @endif
    </div>
</div>
@endsection