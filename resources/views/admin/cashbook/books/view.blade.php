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
        
        <div class="d-flex justify-content-between mb-3">
            <div class="h6">
                <span class="text-success">Total Cash In</span>: {{ number_format(intval($total_cash_in), 0, '.', ',') }}
                <br />
                <span class="text-danger">Total Cash Out</span>: {{ number_format(intval($total_cash_out), 0, '.', ',') }}
            </div>
            <div style="text-align: right;" class="h6">
                <span class="text-{{ strtolower($final_cash >= 0 ? 'success' : 'danger') }}">Final Cash</span>: 
                <span class="text-{{ strtolower($final_cash >= 0 ? 'success' : 'danger') }}">{{ number_format(intval($final_cash), 0, '.', ',') }}</span>
            </div>
        </div>

        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
            <table class="table table-bordered table-hover" id="cashbook-books-table">
                <thead>
                    <tr>
                        <th>Date/Time</th>
                        <th style="text-align: right;">Amount</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                <tr>
                    <td>
                        <span class=""> {{ date('d-m-y', strtotime($entry->entry_date)) }}</span>
                        <br>
                        <span class="text-muted">{{ date('h:i A', strtotime($entry->entry_time)) }}</span>
                    </td>
                    <td class="h6 text-{{ strtolower($entry->cash_entry_type->name) == 'cash in' ? 'success' : 'danger' }}" style="text-align: right;">
                        <span class="text-muted">{{ $entry->cash_payment_mode->name }}</span>
                        <br>
                        {{ intval($entry->amount) }}
                    </td>
                    <td>
                        <span class="text-muted">- {{ $entry->cash_entry_category->name }} -</span>
                        <br>
                        {{ $entry->remarks }}
                    </td>
                    <td>
                        <div class="text-right" style="display: flex; justify-content: end; gap: 5px;">
                        <a href="{{route('admin.cashbook.entries.edit', $entry->id)}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a> 
                        <a href="{{route('admin.cashbook.entries.delete', $entry->id)}}" class="btn btn-danger btn-sm btn-delete-entry">
                            <i class="fa fa-trash"></i>
                        </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        </div>
    </div>
</div>

<div class="modal fade" id="cashEntryModal" tabindex="-1" role="dialog" aria-labelledby="cashEntryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header my-0">
                <h5 class="modal-title my-0" id="cashEntryModalLabel">Cash Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cashEntryForm" method="POST" action="{{ route('admin.cashbook.entries.add') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="cash_entry_type_id" id="id_cash_entry_type_id" value="">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="entry_date">Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="entry_date" name="entry_date" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="entry_time">Time <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" id="entry_time" name="entry_time" value="{{ date('H:i') }}" required>
                        </div>
                    
                        <div class="col-sm-12 d-none">
                            <div class="form-group">
                                <label for="id_cashbook">Cashbook</label>
                                <input type="text" class="form-control" id="id_cashbook" name="book_id" value="{{ $book->id }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="amount">Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="amount" min="1" step="0.01" name="amount" required>
                        </div>
                        
                        <div class="col-sm-6 form-group">
                            <label for="payment_mode">Payment Mode <span class="text-danger">*</span></label>
                            <select class="form-control" id="payment_mode" name="payment_mode_id" required>
                                <option value="">---------</option>
                                @foreach ($paymentModes as $paymentMode)
                                    <option value="{{ $paymentMode->id }}" {{ $paymentMode->name == 'Cash' ? 'selected' : '' }}>{{ $paymentMode->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12 form-group">
                            <label for="remarks">Remarks <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="remarks" name="remarks" required>
                        </div>
                        
                        <div class="col-sm-12 form-group">
                            <label for="id_category">Category <span class="text-danger">*</span></label>
                            <select class="form-control" id="id_category" name="category_id" required>
                                <option value="">---------</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact_person">Contact Person</label>
                            <input type="text" class="form-control" id="contact_person" name="contact_person">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">Cancel</button>
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