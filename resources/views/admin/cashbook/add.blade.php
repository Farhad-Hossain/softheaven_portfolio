@extends('layouts.admin.base', ['title'=>'Users Group'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Cashbook Entry</span> 
    </div>

    <div class="card-body">
        <form action="{{route('admin.cashbook.add')}}" method="POST" id="cashbook-entry-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-3">
                    <label for="id_type">Type</label>
                    <select name="type" id="id_type" class="form-control">
                        @foreach($entryTypes as $entryType)
                            <option value="{{$entryType->id}}">{{$entryType->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="cashbook-date">Date</label>
                    <input type="date" id="cashbook-date" class="form-control" name="date" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="id_time">Time</label>
                    <input type="time" id="id_time" class="form-control" name="time" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="id_amount">Amount</label>
                    <input type="number" id="id_amount" class="form-control" name="amount" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="id_remarks">Remarks</label>
                    <input type="text" id="id_remarks" class="form-control" name="remarks" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="id_category">Category</label>
                    <select name="category_id" id="id_category" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" id="cashbook-entry-submit-btn" class="btn btn-primary">Add Cashbook Entry</button>
        </form>
    </div>
</div>

@endsection

@push('js')
<script type="text/javascript">
    $(`#auth-group-table`).dataTable();
</script>
@endpush