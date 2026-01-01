<form action="{{ route('admin.sliders.edit', $slider->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $slider->title }}" required>
    </div>
    <div class="form-group">
        <label for="">Short Description</label>
        <textarea name="short_description" row="4" required>{{ $slider->title_short_description }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Photo</label>
        <input type="file" name="photo" />
    </div>
    <div class="form-group">
        <label for="">First Button Text</label>
        <input type="text" name="first_btn_text" value="{{ $slider->first_button_text }}" />
    </div>
    <div class="form-group">
        <label for="">First Button Link</label>
        <input type="text" name="first_btn_link" value="{{ $slider->first_button_link }}" />
    </div>
    <div class="form-group">
        <label for="">Second Button Text</label>
        <input type="text" name="second_btn_text" value="{{ $slider->second_button_text }}" />
    </div>
    <div class="form-group">
        <label for="">Second Button Link</label>
        <input type="text" name="second_btn_link" value="{{ $slider->second_button_link }}" />
    </div>
    <div class="form-group">
        <label for="">Active Status</label>
        <select name="is_active" id="" class="form-control form-control-sm">
            <option value="1" {{ $slider->is_active ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $slider->is_active ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>


    <hr />
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-success" value="Update Slider">
        &nbsp;
        <button class="btn btn-sm btn-warning">Cancel</button>
    </div>

</form>