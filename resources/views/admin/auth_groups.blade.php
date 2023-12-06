@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>User Groups</span> 
        <span class="btn btn-sm btn-primary" id="group-creation-btn">Create Group</span>
    </div>

    <div class="card-body">
        <table id="auth-group-table" class="display" style="width:100%" class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach( $authGroups as $authGroup )
                <tr>
                    <td>{{ $authGroup->name }}</td>
                    <td>{{ $authGroup->slug }}</td>
                    <td>
                      <button class="btn btn-sm btn-info">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

            <tfoot>
            </tfoot>
        </table>            
    </div>
</div>


<!-- Group Creation Modal -->
<div class="modal" tabindex="-1" id="group-creation-form-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create User Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('admin.auth.create_group')}}" method="POST" id="create-group-form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12 col-md-6 mb-3">
                <label for="">Group name</label>
                <input type="text" id="group-name-input" name="name" maxlength="50" required>
            </div>
            <div class="col-sm-12 col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" id="group-name-slug" name="slug" maxlength="50" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="create-group-submit-btn" class="btn btn-primary">Create The User Group</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
    $(`#auth-group-table`).dataTable();
    
    // START:: Action of Group Create Button
    $(document).on(`click`, `#group-creation-btn`, ()=> {
      $(`#group-name-input`).focus();
      $(`#group-creation-form-modal`).modal('show');
    });
    // END:: Action of Group Create Button

    // slug auto creation
    $(document).on('keyup change', '#group-name-input', () => {
      let name = $(`#group-name-input`).val().trim().toLowerCase();
      let slug = name.replaceAll(' ', '_');
      $(`#group-name-slug`).val(slug).trigger('change');
    })


    // START:: Create group submit Button Action
    // $(document).on(`click`, `#create-group-submit-btn`, ()=> {
    //   const formData = $(`#create-group-form`).serialize();
    //   const url = $(`#create-group-form`).attr('action');
    //   console.log(formData);
    // });
    // END:: Create group submit Button Action

</script>
@endsection