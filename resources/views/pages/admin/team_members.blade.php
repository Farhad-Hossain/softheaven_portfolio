@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span> Team Members </span>
        <span class="btn btn-sm btn-primary" id="member-add-btn">Add Member</span>
    </div>
    <div class="card-body">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Facebook</th>
                    <th>X</th>
                    <th>Linkedin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teamMembers as $teamMember)
                <tr>
                    <td>
                        <img src="{{asset('uploaded_images/'.$teamMember->photo_url)}}"
                        style="width: 50px; height: 60px;" alt="n/a"> 
                    </td>
                    <td>{{$teamMember->name}}</td>
                    <td>{{$teamMember->designation}}</td>
                    <td>{{$teamMember->facebook ?? ''}}</td>
                    <td>{{$teamMember->x ?? ''}}</td>
                    <td>{{$teamMember->linkedin ?? ''}}</td>
                    
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Team Member adding modal -->
<div class="modal" tabindex="-1" id="team-member-add-modal">
    <form action="{{route('admin.add_team_member')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Member</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" required>
                </div>
                <div class="mb-3 col-sm-12 col-md-6">
                    <label for="">Designation</label>
                    <input type="text" name="designation" id="" required>
                </div>
                <div class="mb-3 col-sm-12 col-md-6">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook" id="">
                </div>
                <div class="mb-3 col-sm-12 col-md-6">
                    <label for="">X</label>
                    <input type="text" name="x" id="">
                </div>
                <div class="mb-3 col-sm-12 col-md-6">
                    <label for="">Linkedin</label>
                    <input type="text" name="linkedin" id="">
                </div>
                <div class="mb-3 col-sm-12 col-md-6">
                    <label for="">Photo</label>
                    <input type="file" name="photo" id="">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </form>
</div>


@endsection

@section('scripts')
<script>
    $(document).ready( ()=>{
        $(document).on('click', `#member-add-btn`, ()=>{
            $(`#team-member-add-modal`).modal('show');
        })
    });
</script>
@endsection