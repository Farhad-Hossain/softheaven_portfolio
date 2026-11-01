@extends('layouts.admin.base', ['title'=>'Your Books'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Your Books</span> 
        <a href="{{route('admin.cashbook.books.add')}}" class="btn btn-primary btn-sm pull-right modal-view" modal-title="Add Book">Add Book</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover table-striped table-sm" id="cashbook-books-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr class="">
                    <td class="font-weight-bold">
                        <a href="{{route('admin.cashbook.book.view', ['book_id' => $book->id])}}" class="btn btn-sm btn-link font-weight-bold">{{ $book->name }}</a>
                    </td>
                    <td class="d-flex justify-content-end">
                        <a href="{{route('admin.cashbook.books.edit', $book->id)}}" class="btn btn-primary btn-sm modal-view" modal-title="Edit Book">
                            <i class="fa fa-edit"></i>
                        </a> &nbsp;
                        <a href="{{route('admin.cashbook.books.delete', $book->id)}}" class="btn btn-danger btn-sm btn-delete-cashbook">
                            <i class="fa fa-trash"></i>
                        </a>
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