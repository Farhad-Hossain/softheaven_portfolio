@extends('layouts.admin.base', ['title'=>'Blogs'])

@section('content')
<div class="card">
    <div class="card-header">Blogs</div>
    <div class="card-body">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Published Date</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach( $blogs as $blog )
                    <tr>
                        <td>
                            <img src="{{asset('storage')}}/{{$blog->thumbnail}}" alt="" style="height: 50px; weight:50px">
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->publication_date }}</td>
                        <td>{{ $blog->published_status == 1 ? 'Published' : 'UnPublished' }}</td>
                        <td>
                            <button class="btn-sm btn-primary edit-btn" data-id="{{$blog->id}}">
                                <a href="{{route('admin.blog.detail')}}?slug={{$blog->slug}}" class="text-light" style="text-decoration:none">Edit</a> 
                            </button>
                            <button class="btn-sm btn-danger delete-btn" data-id="{{$blog->id}}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@component('components.modal_form', [
    'title' => 'Delete Blog',
    'action' => route('admin.blog.delete'),
    'id' => 'delete-modal',
])
    @slot('body')
        <input type="hidden" name="blog_id" id="input-blog-id">
        <h4>Are you sure want to delete ?</h4>
    @endslot
@endcomponent

@endsection

@push('js')
<script>
    $(document).ready(function (){
        $(document).on('click', '.delete-btn', function () {
            $(`#input-blog-id`).val( $(this).data('id') );
            $(`#delete-modal`).modal('show');
        })
    });
</script>
@endpush