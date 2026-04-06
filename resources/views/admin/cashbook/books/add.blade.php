<form action="{{ route('admin.cashbook.books.add') }}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group mb-1">
            <label for="name">Book Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group mb-1">
            <button type="submit" class="btn btn-primary">Add Book</button>
        </div>
    </div>
</form>