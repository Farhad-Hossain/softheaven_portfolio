@extends('layouts.admin.base', ['title'=>request()->slug ? 'Edit Blog' : 'Create Blog'])

@section('styles')
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">Blog Information</div>
        <div class="card-body">
            @component('components.blog.form', ['blog'=>$blog])
                @slot('action')
                    {{route('admin.blog.store')}}
                @endslot
            @endcomponent
        </div>
    </div>
@endsection


@push('js')
<script>
    $(document).ready(function (){
        ckEditor('editor')

        $(document).on('keyup', '#title', function () {
            let title = $(this).val().trim().toLowerCase();
            slug = title.replaceAll(" ", "_");
            $(`#slug`).val(slug);
        })
    });

</script>
@endpush