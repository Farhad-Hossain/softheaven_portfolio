@extends('layouts.admin.base', ['title'=>'Your Books'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Your Books</span> 
        <a href="{{route('admin.cashbook.books.add')}}" class="btn btn-primary btn-sm pull-right modal-view" modal-title="Add Book">Add Book</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover" id="cashbook-books-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>
                        <a href="{{route('admin.cashbook.book.view', ['book_id' => $book->id])}}" class="btn btn-sm btn-link">{{ $book->name }}</a>
                    </td>
                    <td>
                        <a href="{{route('admin.cashbook.edit', $book->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('admin.cashbook.books.delete', $book->id)}}" class="btn btn-danger btn-sm btn-delete-cashbook">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('js')
<script type="text/javascript">
    $(`#cashbook-books-table`).dataTable();

    $(document).on('click', '.btn-delete-cashbook', async function(event) {
        event.preventDefault();
        var url = $(this).attr('href');

        const confirmed = await confirm('Are you sure want to delete this book?');

        if (confirmed) {
            var $form = $(`<form action="${url}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>`);

            $('body').append($form);
            $form.submit();
        }


    });
</script>
@endpush