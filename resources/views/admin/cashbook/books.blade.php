@extends('layouts.admin.base', ['title'=>'Your Books'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Your Books</span> 
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
                    <td>{{ $book->name }}</td>
                    <td>
                        <a href="{{route('admin.cashbook.edit', $book->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('admin.cashbook.delete', $book->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
</script>
@endpush