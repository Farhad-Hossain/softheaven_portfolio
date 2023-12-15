@extends('layouts.admin.base', ['Clients List'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Clients Company List</span>
        <button class="btn btn-sm btn-success" id="btn-add-client">Add Client</button>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Company Link Address</th>
                    <th>Logo</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- Add COmpany Modal -->
<div class="modal fade" id="add-company-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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