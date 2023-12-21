<form id="blog_form" action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="blog_id" value="{{$blog?->id}}">
    <div class="row">
        <div class="col-sm-12 col-md-6 mb-3">
            <label for="">Title</label>
            <input type="text" name="title" id="title" value="{{$blog?->title}}" required>
        </div>
        <div class="col-sm-12 col-md-6 mb-3">
            <label for="">Slug</label>
            <input type="text" name="slug" id="slug" value="{{$blog?->slug}}" required>
        </div>
        <div class="col-sm-12 col-md-6 mb-3">
            <label for="">Thumbnail</label>
            <input type="file" accept="image/*" name="thumbnail" required>
        </div>
        <div class="col-sm-12 col-md-6 mb-3">
            <label for="">Publication Date</label>
            <input type="date" class="form-control" name="publication_date" value="{{$blog?->publication_date}}" required>
        </div>
        <div class="col-sm-12 mb-3">
            <label for="">Content</label>
            <textarea name="content" id="editor" cols="30" rows="10">{!!$blog?->content!!}</textarea>
        </div>
        </script>
        </div>
        <div class="col-sm-12 mb-3">
            <label for="">Publication Status</label>
            <select name="" id="" class="form-control">
                <option value="1">Published</option>
                <option value="0">Un Published</option>
            </select>
        </div>
        <div class="col-sm-12">
            <button type="submit" class="btn-success">Save Changes</button>
        </div>
    </div>
</form>