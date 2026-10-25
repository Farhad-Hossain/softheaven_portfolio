<form action="{{route('admin.cashbook.categories.add')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <div class="col-md-12">
            <br />
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>