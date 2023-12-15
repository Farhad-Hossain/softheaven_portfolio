@extends('layouts.admin.base', ['Clients List'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Clients Company List</span>
        <button class="btn btn-sm btn-success" id="btn-add-client">Add Client</button>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                  <th>Logo</th>
                  <th>Company Name</th>
                  <th>Company Link Address</th>  
                  <th>Action</th>
                </tr>
            </thead>

            <tbody>
              @foreach($clients as $c)
                <tr>
                  <td>
                    <img src="{{asset('storage'.'/'.$c->logo_link)}}" alt="" style="width: 50px; height: 50px;">
                  </td>
                  <td>{{$c->name}}</td>
                  <td>{{$c->link}}</td>
                  <td>
                    <button class="btn-sm btn-warning edit-btn" data-id="{{$c->id}}">Edit</button>
                    <button class="btn-sm btn-danger delete-btn" data-id="{{$c->id}}">Delete</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- Add COmpany Modal -->
<div class="modal fade" id="add-company-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{route('admin.add_client_company')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add client' Company</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="">Name</label>
            <input type="text" maxlength="50" name="name" required>
          </div>

          <div class="mb-3">
            <label for="">Company Link</label>
            <input type="url" maxlength="100" name="link" required>
          </div>

          <div class="mb-3">
            <label for="">Logo</label>
            <input type="file" name="logo_link" id="" accept="image/*" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready( ()=>{
        $(document).on('click', `#btn-add-client`, ()=>{
            $(`#add-company-modal`).modal('show');
        })
    });
</script>
@endsection