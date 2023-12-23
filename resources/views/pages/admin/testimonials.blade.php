@extends('layouts.admin.base', ['title'=>'Testimonials'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Testimonials</span> 
        <button class="btn-sm btn-success" id="add-btn" data-toggle="modal">Add</button>
    </div>

    <div class="card-body">
        @if( count($testimonials) )
        <table class="table">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>


                <tr>
                    @foreach($testimonials as $t)
                    <tr>
                        <td>
                            <img src="{{asset('storage')}}/{{$t->avatar}}" alt="" @style([
                                'width: 60px',
                                'height: 60px'
                            ])>
                        </td>
                        <td>{{$t->name}}</td>
                        <td>{{$t->designation}}</td>
                        <td>{{$t->organization}}</td>
                        <td>{{ $t->message }}</td>
                        <td>
                            <span @class(['text-success'=>$t->status, 'text-danger'=> !$t->status])>
                                {{$t->status ? 'Active' : 'Inactive'}}
                            </span>
                        </td>
                        <td>
                            <button class="btn-sm btn-success edit-btn" 
                                data-id="{{$t->id}}" 
                                data-name="{{$t->name}}" 
                                data-designation="{{$t->designation}}" 
                                data-organization="{{$t->organization}}" 
                                data-message="{{$t->message}}">
                                Edit
                            </button>
                            <button class="btn-sm btn-danger delete-btn" data-id="{{$t->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tr>
            </thead>
        </table>
        @else
            @noDataAvailable
        @endif
    </div>
</div>

<!-- EDIT  -->
@component('components.modal_form', [
    'id'=>'add-testimonial-modal',
    'title'=>'Add Testimonial',
    'action'=>route('admin.testimonial.save'),
])

@slot('body')
<input type="hidden" name="id" value="" id="input-id">
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Name</label>
    <input type="text" name="name" id="input-name">
</div>
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Designation</label>
    <input type="text" name="designation" id="input-designation">
</div>
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Organization</label>
    <input type="text" name="organization" id="input-organization">
</div>
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Avater</label>
    <input type="file" name="avatar" accept="image/*" id="input-avatar">
</div>
<div class="mb-3 col-sm-12">
    <label for="">Message</label>
    <textarea name="message" cols="30" rows="3" id="input-message"></textarea>
</div>
@endslot

@endcomponent

<!-- Delete Component -->
@component('components.modal_form', [
    'id'=>'delete-testimonial-modal',
    'title'=>'Delete Testimonial',
    'action'=>route('admin.testimonial.delete'),
])
    @slot('body')
    <input type="hidden" name="id" value="" id="id-field-delete-form">
    <h2>Are you sure want to delete ?</h2>
    @endslot
@endcomponent


@endsection

@push('js')
<script>
    $(document).ready(function(){
        $(document).on('click', '#add-btn', function () {
            $('#add-testimonial-modal').modal('show');
        });

        $(document).on('click', `.edit-btn`, function () {
            $(`#input-id`).val( $(this).data('id') );
            $(`#input-name`).val( $(this).data('name') );
            $(`#input-designation`).val( $(this).data('designation') );
            $(`#input-organization`).val( $(this).data('organization') );
            $(`#input-avatar`).val( $(this).data('avatar') );
            $(`#input-message`).text( $(this).data('message') );

            $('#add-testimonial-modal').modal('show');
        })

        $(document).on('click', '.delete-btn', function () {
            let id = $(this).data('id');
            $(`#id-field-delete-form`).val(id)
            $(`#delete-testimonial-modal`).modal('show');
        });
    });
</script>
@endpush