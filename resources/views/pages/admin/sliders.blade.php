@extends('layouts.admin.base', ['tile'=>'Sliders list'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Sliders</span>
        <span>
            <a href="{{route('admin.sliders.add')}}" id="slider-add-btn" class="btn btn-primary btn-sm">Add Slider</a> 
        </span>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Photo</th>
                    <th>First Button Text</th>
                    <th>First Button Link</th>
                    <th>Second Button Text</th>
                    <th>Second Button Link</th>
                    <th>Active Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($sliders as $s)
                <tr>
                    <td>{{ $s->title }}</td>
                    <td>{{ $s->title_short_description }}</td>
                    <td>
                        <img src="{{asset('uploaded_images/'.$s->photo)}}" style="width: 50px; height: 50px" alt="">
                    </td>
                    <td>{{ $s->first_button_text }}</td>
                    <td>{{ $s->first_button_link }}</td>
                    <td>{{ $s->second_button_text }}</td>
                    <td>{{ $s->second_button_link }}</td>
                    <td>{{ $s->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning btn-edit">Edit</button>
                        <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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