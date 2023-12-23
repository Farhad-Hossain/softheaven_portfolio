<div class="modal" tabindex="-1" id="{{ $id }}">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="modal-body">
        <div class="row">
        {{ $body }}
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>
    </div>
  </div>
</div>