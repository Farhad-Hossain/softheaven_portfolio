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
                        <td>
                            <span @class(['text-success'=>$t->status, 'text-danger'=> !$t->status])>
                                {{$t->status ? 'Active' : 'Inactive'}}
                            </span>
                        </td>
                        <td>
                            <button class="btn-sm btn-success edit-btn" data-id="{{$t->id}}">Edit</button>
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

@component('components.modal_form', ['args'=>[
    'id'=>'add-testimonial-modal',
    'title'=>'Add/Edit Testimonial',
    'action'=>route('admin.testimonial.save'),
]])
@slot('body')
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Name</label>
    <input type="text" name="name" id="">
</div>
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Designation</label>
    <input type="text" name="designation" id="">
</div>
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Organization</label>
    <input type="text" name="organization" id="">
</div>
<div class="mb-3 col-sm-12 col-md-6">
    <label for="">Avater</label>
    <input type="file" name="avatar" id="" accept="image/*">
</div>
<div class="mb-3 col-sm-12">
    <label for="">Message</label>
    <textarea name="message" id="" cols="30" rows="3"></textarea>
</div>
@endslot

@endcomponent


<!-- Delete Component -->
@component('components.modal_form', ['args'=>[
    'id'=>'delete-testimonial-modal',
    'title'=>'Delete Testimonial',
    'action'=>route('admin.testimonial.delete'),
]])
@slot('body')
<input type="hidden" name="id" value="" id="id-field-delete-form">
<h2>Are you sure want to delete ?</h2>
@endslot
@endcomponent




@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $(document).on('click', '#add-btn', function () {
            $('#add-testimonial-modal').modal('show');
        });

        $(document).on('click', '.delete-btn', function () {
            let id = $(this).data('id');
            $(`#id-field-delete-form`).val(id)
            $(`#delete-testimonial-modal`).modal('show');
        });
    });
</script>
@endsection