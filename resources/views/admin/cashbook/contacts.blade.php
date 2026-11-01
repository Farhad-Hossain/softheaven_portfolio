@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Contacts</h5>
            <button class="btn btn-primary" id="id_add_contact_btn">Add New</button>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->address}}</td>
                    <td>
                        <span class="bg-{{$contact->status == 1 ? 'success' : 'danger'}} px-1 rounded text-white font-weight-bold">
                            {{$contact->status == 1 ? 'Active' : 'Inactive'}}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary edit_contact" 
                                data-id="{{$contact->id}}" 
                                data-name="{{$contact->name}}" 
                                data-phone="{{$contact->phone}}" 
                                data-address="{{$contact->address}}" 
                                data-status="{{$contact->status}}">Edit
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="id_add_contact_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.cashbook.contacts.add') }}" method="post">
                    @csrf
                    <div class="form-group">
                        @component('components.label', ['label' => 'Name', 'id'=> 'name', 'required' => true])@endcomponent
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        @component('components.label', ['label' => 'Phone No', 'id'=> 'phone'])@endcomponent
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        @component('components.label', ['label' => 'Address', 'id'=> 'address'])@endcomponent
                        <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        @component('components.label', ['label' => 'Status', 'id'=> 'status'])@endcomponent
                        <select class="form-control" id="status" name="status">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="id_edit_contact_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="id" id="edit_id">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="edit_phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="edit_address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="edit_status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#id_add_contact_btn').click(function() {
            $('#id_add_contact_modal').modal('show');
        });

        $('.edit_contact').click(function() {
            let id = $(this).attr('data-id');

            let url = "{{ route('admin.cashbook.contacts.edit', 'id') }}";
            url = url.replace('id', id);

            $('#id_edit_contact_modal form').attr('action', url);

            let name = $(this).attr('data-name');
            let phone = $(this).attr('data-phone');
            let address = $(this).attr('data-address');
            let status = $(this).attr('data-status');
            $('#id_edit_contact_modal #edit_id').val(id);
            $('#id_edit_contact_modal #edit_name').val(name);
            $('#id_edit_contact_modal #edit_phone').val(phone);
            $('#id_edit_contact_modal #edit_address').val(address);
            $('#id_edit_contact_modal #edit_status').val(status).trigger('change');
            $('#id_edit_contact_modal').modal('show');
        });
    });
</script>
@endpush
