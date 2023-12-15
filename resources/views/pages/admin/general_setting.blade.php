@extends('layouts.admin.base', ['title'=>'General Setting'])

@section('content')
<div class="card">
    <div class="card-header">General Settings</div>
    <div class="card-body">
        <form action="{{route('admin.general_setting')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Hotline Number</label>
                <input type="text" name="hotline_no" maxlength='14' value="{{$gs->hotline_no ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Contact No 1</label>
                <input type="text" name="contact_no_1" maxlength='14' value="{{$gs->contact_no_1 ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Contact No 2</label>
                <input type="text" name="contact_no_2" maxlength='14' value="{{$gs->contact_no_2 ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Email Address</label>
                <input type="text" name="email" maxlength='50' value="{{$gs->contact_email ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Trusted Clients Count</label>
                <input type="number" name="trusted_clients_count" value="{{$gs->trusted_clients_count ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Ratings</label>
                <input type="number" name="rating" value="{{$gs->rating ?? ''}}">
            </div>
            
            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Address Bar Icon</label>
                <input type="file" name="address_bar_icon" value="{{$gs->address_bar_icon ?? ''}}" accept="image/*">
            </div>

            <div class="col-sm-12 col-md-3 mb-3">
                <label for="">Logo</label>
                <input type="file" name="logo" value="{{$gs->logo ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-6 mb-3">
                <label for="">Promo Video Link</label>
                <input type="text" name="promo_video_link" maxlength="250" value="{{$gs->promo_video_link ?? ''}}">
            </div>

            <div class="col-sm-12 col-md-6 mb-3">
                <label for="">Company Link</label>
                <input type="text" name="company_link" maxlength="250" value="{{$gs->company_link ?? ''}}" required>
            </div>

            <div class="col-sm-12 col-md-6 mb-3">
                <label for="">Title Message</label>
                <textarea name="title_message" class="form-control" id="" cols="30" rows="3" required>{{$gs->title_message ?? ''}}</textarea>
            </div>

            <div class="col-sm-12 col-md-6 mb-3">
                <label for="">Sub Title Message</label>
                <textarea name="sub_title_message" class="form-control" id="" cols="30" rows="3" required>{{$gs->sub_title_message ?? ''}}</textarea>
            </div>

            <div class="col-sm-12 mb-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@endsection