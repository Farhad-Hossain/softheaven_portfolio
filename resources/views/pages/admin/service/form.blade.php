@extends('layouts.admin.base', ['title'=>'Service Information'])

@section('content')
    <div class="card">
        <div class="card-header">Service Information</div>
        <div class="card-body">
            <form action="{{route('admin.service.save')}}" method="POST">
                <input type="hidden" name="service_id" value="{{$service ? $service->id : ''}}">
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" value="{{$service ? $service->title : ''}}">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="4">{{$service ? $service->description : ''}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <select name="active_status" id="" class="form-control">
                        <option value="1" {{ ($service && $service->active_status) ? 'selected' : ''}}>Active</option>
                        <option value="0" {{ ($service && $service->active_status == 0) ? 'selected' : ''}}>InActive</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection