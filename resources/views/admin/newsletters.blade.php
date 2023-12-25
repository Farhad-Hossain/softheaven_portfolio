@extends('layouts.admin.base', ['title'=>'News letters'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span> Newsletters</span>
        <span> 
            <button class="btn btn-sm btn-primary" id="bulk-action-btn">Bulk Action</button>
        </span>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Ip address</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($newsletters as $n)
                    <tr>
                        <td>{{ $n->email }}</td>
                        <td>{{ $n->ip_address }}</td>
                        <td>{{ \Carbon\Carbon::parse($n->created_at)->format('d M Y, h:i a') }}</td>
                        <th>
                            <button class="btn btn-sm btn-primary send-email-btn">Send Email</button>
                        </th>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection