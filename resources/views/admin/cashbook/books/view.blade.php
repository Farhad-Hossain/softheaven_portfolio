@extends('layouts.admin.base', ['title'=>'Your Books'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="font-weight-bold h5 pb-0 mb-0">{{ $book->name }}</span> 
    </div>

    <div class="card-body">
        @foreach($entryTypes as $entryType)
            <button class="btn btn-sm btn-{{ strtolower($entryType->name) == 'cash in' ? 'success' : 'danger' }}" 
                onclick="raiseCashEntryModal('{{ $entryType->id }}', '{{ $entryType->name }}')"
                >{{ $entryType->name }}</button> &nbsp;&nbsp;
        @endforeach
        <br />
        <br />
        <table class="table table-bordered table-hover" id="cashbook-books-table">
            <thead>
                <tr>
                    <th>Date & Time</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                <tr>
                    <td>
                        <span class=""> {{ date('d M Y', strtotime($entry->entry_date)) }}</span>
                        <br>
                        <span class="text-muted">{{ date('h:i A', strtotime($entry->entry_time)) }}</span>
                    </td>
                    <td class="h6 text-{{ strtolower($entry->cash_entry_type->name) == 'cash in' ? 'success' : 'danger' }}">
                        {{ intval($entry->amount) }}
                        <br />
                        <span class="text-muted">{{ $entry->cash_payment_mode->name }}</span>
                    </td>
                    <td>
                        {{ $entry->cash_entry_category->name }}
                    </td>
                    <td>
                        {{ $entry->remarks }}
                    </td>
                    <td>
                        <a href="{{route('admin.cashbook.books.edit', $book->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('admin.cashbook.books.delete', $book->id)}}" class="btn btn-danger btn-sm btn-delete-cashbook">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="cashEntryModal" tabindex="-1" role="dialog" aria-labelledby="cashEntryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cashEntryModalLabel">Cash Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cashEntryForm" method="POST" action="{{ route('admin.cashbook.entries.add') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="cash_entry_type_id" id="id_cash_entry_type_id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" id="entry_date" name="entry_date" value="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="time" class="form-control" id="entry_time" name="entry_time" value="{{ date('H:i') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-none">
                        <label for="id_cashbook">Cashbook</label>
                        <input type="text" class="form-control" id="id_cashbook" name="book_id" value="{{ $book->id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" min="0" step="0.01" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_person">Contact Person</label>
                        <input type="text" class="form-control" id="contact_person" name="contact_person">
                    </div>
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <input type="text" class="form-control" id="remarks" name="remarks">
                    </div>
                    
                    <div class="form-group">
                        <label for="payment_mode">Payment Mode</label>
                        <select class="form-control" id="payment_mode" name="payment_mode_id" required>
                            <option value="">---------</option>
                            @foreach ($paymentModes as $paymentMode)
                                <option value="{{ $paymentMode->id }}">{{ $paymentMode->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_category">Categories</label>
                        <select class="form-control" id="id_category" name="category_id" required>
                            <option value="">---------</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Entry</button>
                </div>
        </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<script type="text/javascript">
    function raiseCashEntryModal(type, typeName) {
        $('#id_cash_entry_type_id').val(type);
        $('#cashEntryModalLabel').text(typeName);
        $('#cashEntryModal').modal('show');
    }
</script>
@endpush