@extends('layouts.admin.base', ['title'=>'Your Books'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Your Cash Expense Categories</span> 
        <a href="{{route('admin.cashbook.categories.add')}}" class="btn btn-primary btn-sm pull-right modal-view" modal-title="Add Category">Add Category</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover" id="cashbook-categories-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        <a href="{{ route('admin.cashbook.categories.edit', [ 'id' => $category->id]) }}" class="btn btn-primary btn-sm modal-view" modal-title="Edit Category">Edit</a>
                        <a href="{{ route('admin.cashbook.categories.delete', ['id' => $category->id]) }}" class="btn btn-danger btn-sm btn-delete-category">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="genericModal" tabindex="-1" role="dialog" aria-labelledby="cashEntryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cashEntryModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="genericModalForm" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="id_form_container">
                    
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script type="text/javascript">
    $(`#cashbook-categories-table`).dataTable();

    $(document).on('click', '.btn-delete-category', async function(event) {
        event.preventDefault();
        var url = $(this).attr('href');

        const confirmed = await confirm('Are you sure want to delete this category?');

        if (confirmed) {
            var $form = $(`<form action="${url}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>`);

            $('body').append($form);
            $form.submit();
        }


    });


    // Generic modal view
    // $(document).on('click', '.modal-view', function(e) {
    //     e.preventDefault();
    //     var url = $(this).attr('href');
    //     var modalTitle = $(this).attr('modal-title');
        
    //     // Set the modal title
    //     $('#genericModal .modal-title').text(modalTitle);
        
    //     // Load the content using AJAX
    //     $('#genericModal .modal-body').html('Loading...');
    //     $('#genericModal').modal('show');

    //     $('#genericModalForm').attr('action', url);
        
    //     $.ajax({
    //         url: url,
    //         type: 'GET',
    //         success: function(response) {
    //             console.log(response);
    //             $('body #id_form_container').html(response);
    //         },
    //         error: function(xhr) {
    //             $('body #id_form_container').html('Error loading content.');
    //             console.log(xhr.responseText);
    //         }
    //     });
    // });

    // Handle form submission inside the generic modal
    $(document).on('submit', '#genericModal form', function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');

        $.ajax({
            url: url,
            type: method,
            data: form.serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    // Close the modal
                    $('#genericModal').modal('hide');
                    
                    // Show a success message
                    alert(response.message);
                    
                    // Reload the page or update the table
                    location.reload();
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                alert('Error submitting the form. Please try again.');
                console.log(xhr.responseText);
            }
        });
    });
</script>
@endpush