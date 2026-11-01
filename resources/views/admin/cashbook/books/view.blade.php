@extends('layouts.admin.base', ['title'=>'Your Books'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="font-weight-bold h5 pb-0 mb-0">{{ $book->name }}</span> 
    </div>

    <div class="card-body">
        <div class="d-flex justify-content-among mb-2">
            @foreach($entryTypes as $entryType)
                <button class="btn btn-sm btn-{{ strtolower($entryType->name) == 'cash in' ? 'success' : 'danger' }}" 
                    onclick="raiseCashEntryModal('{{ $entryType->id }}', '{{ $entryType->name }}')"
                    >{{ $entryType->name }}</button> &nbsp;
            @endforeach
            <button class="btn btn-sm btn-outline-secondary" type="button" 
                    data-toggle="collapse" data-target="#filterPanel" 
                    data-bs-toggle="collapse" data-bs-target="#filterPanel"
                    aria-expanded="{{ $hasActiveFilters ? 'true' : 'false' }}" 
                    aria-controls="filterPanel" id="filterToggleBtn">
                <i class="fa fa-filter"></i>Filter
                @if($hasActiveFilters)
                    <span class="badge badge-primary ml-1" style="background:#4e73df;">Active</span>
                @endif
            </button> &nbsp;
            @if($hasActiveFilters)
                <a href="{{ route('admin.cashbook.book.view', $book->id) }}" class="btn btn-sm btn-outline-danger">
                    <i class="fa fa-times"></i> Clear 
                </a>
            @endif
        </div>

        {{-- ===== FILTER PANEL ===== --}}
            <div class="collapse {{ $hasActiveFilters ? 'show' : '' }}" id="filterPanel">
                <div class="card card-body mb-2 py-1" style="background:#f8f9fc; border:1px solid #e3e6f0;">
                    <form method="GET" action="{{ route('admin.cashbook.book.view', $book->id) }}" id="filterForm">
                        <div class="row">
                            {{-- Entry Type --}}
                            <div class="col-4 col-md-3 form-group mb-1 px-1">
                                <label class="small font-weight-bold mb-1" for="filter_entry_type">Entry Type</label>
                                <select class="form-control form-control-sm" id="filter_entry_type" name="entry_type_id">
                                    <option value="">------</option>
                                    @foreach($entryTypes as $et)
                                        <option value="{{ $et->id }}" {{ isset($filters['entry_type_id']) && $filters['entry_type_id'] == $et->id ? 'selected' : '' }}>
                                            {{ $et->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Contact --}}
                            <div class="col-8 col-md-3 form-group mb-1 px-1">
                                <label class="small font-weight-bold mb-1" for="filter_contact">Contact</label>
                                <select class="form-control form-control-sm" id="filter_contact" name="contact_id">
                                    <option value="">------</option>
                                    @foreach($contacts as $c)
                                        <option value="{{ $c->id }}" {{ isset($filters['contact_id']) && $filters['contact_id'] == $c->id ? 'selected' : '' }}>
                                            {{ $c->name }}{{ $c->phone ? ' - '.$c->phone : '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            {{-- Date From --}}
                            <div class="col-6 col-md-3 form-group mb-1 px-1">
                                <label class="small font-weight-bold mb-1" for="filter_date_from">Date From</label>
                                <input type="date" class="form-control form-control-sm" id="filter_date_from" 
                                       name="date_from" value="{{ $filters['date_from'] ?? '' }}">
                            </div>

                            {{-- Date To --}}
                            <div class="col-6 col-md-3 form-group mb-1 px-1">
                                <label class="small font-weight-bold mb-1" for="filter_date_to">Date To</label>
                                <input type="date" class="form-control form-control-sm" id="filter_date_to" 
                                       name="date_to" value="{{ $filters['date_to'] ?? '' }}">
                            </div>

                            {{-- Amount Min --}}
                            <div class="col-6 col-md-3 form-group mb-1 px-1">
                                <label class="small font-weight-bold mb-1" for="filter_amount_min">Amount Min</label>
                                <input type="number" class="form-control form-control-sm" id="filter_amount_min" 
                                       name="amount_min" min="0" step="0.01"
                                       placeholder="Min" value="{{ $filters['amount_min'] ?? '' }}">
                            </div>

                            {{-- Amount Max --}}
                            <div class="col-6 col-md-3 form-group mb-1 px-1">
                                <label class="small font-weight-bold mb-1" for="filter_amount_max">Amount Max</label>
                                <input type="number" class="form-control form-control-sm" id="filter_amount_max" 
                                       name="amount_max" min="0" step="0.01"
                                       placeholder="Max" value="{{ $filters['amount_max'] ?? '' }}">
                            </div>

                            {{-- Actions --}}
                            <div class="col-sm-12 col-md-6 form-group my-2 d-flex align-items-end px-1" style="gap:8px;">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-search"></i> Apply
                                </button>
                                <a href="{{ route('admin.cashbook.book.view', $book->id) }}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-undo"></i> Reset
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        {{-- ===== END FILTER PANEL ===== --}}

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

        <div class="table-responsive" style="max-height: 800px; overflow-y: auto;">
            <table class="table table-bordered table-hover" id="cashbook-books-table">
                <thead>
                    <tr>
                        <th>Date/Time</th>
                        <th style="text-align: right;">Amount</th>
                        <th>Remarks</th>
                        <th>Contact</th>
                        <th class="text-right" style="text-align: right;">Actions</th>
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
                        
                        <span class="text-muted">{{ $entry->cash_entry_category->name }}</span>
                        <br>
                        {{ intval($entry->amount) }}
                    </td>
                    <td>
                        <span class="text-muted">{{ $entry->cash_payment_mode->name }}</span>
                        <br>
                        {{ $entry->remarks }}
                    </td>
                    <td>
                        @if(isset($entry->contact))
                            <span class="text-muted">{{ $entry->contact->name }}</span>
                            <br />
                            @if(isset($entry->contact->phone))
                            <span class="text-muted">
                                <a href="tel:{{ $entry->contact->phone }}">{{ $entry->contact->phone }}</a>
                            </span>
                            @endif
                        @endif
                    </td>
                    <td>
                        <div class="text-right" style="display: flex; justify-content: end; gap: 5px;">
                        <a href="#" class="btn btn-primary btn-sm entry-edit-btn" 
                            data-entry-id="{{$entry->id}}"
                            data-date="{{$entry->entry_date}}"
                            data-time="{{$entry->entry_time}}"
                            data-amount="{{$entry->amount}}"
                            data-cash-entry-type-id="{{$entry->cash_entry_type_id}}"
                            data-payment-mode-id="{{$entry->payment_mode_id}}"
                            data-remarks="{{$entry->remarks}}"
                            data-category-id="{{$entry->category_id}}"
                            data-contact-id="{{$entry->contact_id}}"
                            >
                            <i class="fa fa-edit"></i>
                        </a> 
                        <a href="#" class="btn btn-danger btn-sm btn-delete-entry" data-entry-id="{{$entry->id}}">
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
            <div class="modal-header py-1">
                <h5 class="modal-title my-0" id="cashEntryModalLabel">Cash Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cashEntryForm" method="POST" action="{{ route('admin.cashbook.entries.add') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="id_cash_entry_type_id" name="cash_entry_type_id" value="">

                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="entry_date">Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="entry_date" name="entry_date" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-6 form-group">
                            <label for="entry_time">Time <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" id="entry_time" name="entry_time" value="{{ date('H:i') }}" required>
                        </div>
                    
                        <div class="col-12 d-none">
                            <div class="form-group">
                                <label for="id_cashbook">Cashbook</label>
                                <input type="text" class="form-control" id="id_cashbook" name="book_id" value="{{ $book->id }}" required>
                            </div>
                        </div>
                        <div class="col-6 form-group">
                            <label for="amount">Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="amount" min="1" step="0.01" name="amount" required>
                        </div>
                        
                        <div class="col-6 form-group">
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
                            <label for="contact_id">Contact</label>
                            <select class="form-control" id="contact_id" name="contact_id">
                                <option value="">---------</option>
                                @foreach ($contacts as $contact)
                                    <option value="{{ $contact->id }}">{{ $contact->name }} - {{ $contact->phone }}</option>
                                @endforeach
                            </select>
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

<div class="modal fade" id="entryEditModal" tabindex="-1" role="dialog" aria-labelledby="entryEditModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header py-0">
                <h5 class="modal-title my-0" id="entryEditModalLabel">Edit Cash Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="entryEditForm" method="POST" action="">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="entry_id" id="edit_entry_id" value="">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="edit_cash_entry_type_id">Entry Type <span class="text-danger">*</span></label>
                            <select class="form-control" id="edit_cash_entry_type_id" name="cash_entry_type_id" required>
                                <option value="">---------</option>
                                @foreach ($entryTypes as $entryType)
                                    <option value="{{ $entryType->id }}">{{ $entryType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="edit_entry_date">Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="edit_entry_date" name="entry_date" value="" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="edit_entry_time">Time <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" id="edit_entry_time" name="entry_time" value="" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="edit_amount">Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="edit_amount" min="1" step="0.01" name="amount" value="" required>
                        </div>
                        
                        <div class="col-sm-6 form-group">
                            <label for="edit_payment_mode">Payment Mode <span class="text-danger">*</span></label>
                            <select class="form-control" id="edit_payment_mode" name="payment_mode_id" required>
                                <option value="">---------</option>
                                @foreach ($paymentModes as $mode)
                                    <option value="{{ $mode->id }}">{{ $mode->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12 form-group">
                            <label for="edit_remarks">Remarks <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_remarks" name="remarks" required>
                        </div>
                        
                        <div class="col-sm-12 form-group">
                            <label for="edit_id_category">Category <span class="text-danger">*</span></label>
                            <select class="form-control" id="edit_id_category" name="category_id" required>
                                <option value="">---------</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_contact_id">Contact</label>
                            <select class="form-control" id="edit_contact_id" name="contact_id">
                                <option value="">---------</option>
                                @foreach ($contacts as $contact)
                                    <option value="{{ $contact->id }}">{{ $contact->name }} - {{ $contact->phone }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Entry</button>
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

    $(document).ready(function() {
        $(`.entry-edit-btn`).on(`click`, function(e) {
            e.preventDefault();
            let entryId = $(this).data('entry-id');
            let url = `{{ route("admin.cashbook.entries.edit", 'placeholder') }}`.replace('placeholder', entryId);
            $('#entryEditModal form').attr('action', url);
            $('#entryEditModal #edit_entry_id').val(entryId);
            $('#entryEditModal #edit_cash_entry_type_id').val($(this).data('cash-entry-type-id'));
            $('#entryEditModal #edit_entry_date').val($(this).data('date'));
            $('#entryEditModal #edit_entry_time').val($(this).data('time'));
            $('#entryEditModal #edit_amount').val($(this).data('amount'));
            $('#entryEditModal #edit_payment_mode').val($(this).data('payment-mode-id'));
            $('#entryEditModal #edit_remarks').val($(this).data('remarks'));
            $('#entryEditModal #edit_id_category').val($(this).data('category-id'));
            $('#entryEditModal #edit_contact_id').val($(this).data('contact-id'));
            $('#entryEditModal').modal('show');
        });
    })
</script>
@endpush