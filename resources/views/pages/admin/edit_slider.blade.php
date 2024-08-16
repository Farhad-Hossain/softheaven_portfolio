@extends('layouts.admin.base', ['tile'=>'Edit Slider'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Edit Slider</span>
        <span>
            <a href="{{route('admin.sliders.list')}}" id="slider-add-btn" class="btn btn-primary btn-sm">All Sliders</a> 
        </span>
    </div>

    <div class="card-body">
        
    </div>
</div>

<div id="form-add-slider" class="d-none">
    <form action="{{route('admin.sliders.add')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" required>
        </div>
        <div class="form-group">
            <label for="">Short Description</label>
            <textarea name="short_description" row="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" name="photo" />
        </div>
        <div class="form-group">
            <label for="">First Button Text</label>    
            <input type="text" name="first_btn_text" />
        </div>
        <div class="form-group">
            <label for="">First Button Link</label>    
            <input type="text" name="first_btn_link" />
        </div>
        <div class="form-group">
            <label for="">Second Button Text</label>    
            <input type="text" name="second_btn_text" />
        </div>
        <div class="form-group">
            <label for="">Second Button Link</label>    
            <input type="text" name="second_btn_link" />
        </div>
        <div class="form-group">
            <label for="">Active Status</label>    
            <select name="is_active" id="" class="form-control form-control-sm">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        
        <hr />
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-success" value="Create Slider">
            &nbsp;
            <button class="btn btn-sm btn-warning">Cancel</button>
        </div>
        
    </form>
</div>


@endsection

@push('js')
<script>
    $(`body #slider-add-btn`).on('click', (e)=>{
        e.preventDefault();
        riseModal('Demo Modal', `form-add-slider` );
    })
</script>
@endpush