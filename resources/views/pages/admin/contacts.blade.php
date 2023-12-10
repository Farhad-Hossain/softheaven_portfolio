@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header">Contacts</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone_no}}</td>
                    <td>{{$contact->message}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" dataid="{{$contact->id}}">Send Reply</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection