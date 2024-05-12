@extends('layouts.admin.base', ['tile'=>'Sliders list'])

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Sliders</span>
        <span>
            <a href="{{route('admin.sliders.add')}}" id="slider-add-btn" class="btn btn-primary btn-sm">Add Slider</a> 
        </span>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Photo</th>
                    <th>First Button Text</th>
                    <th>First Button Link</th>
                    <th>Second Button Text</th>
                    <th>Second Button Link</th>
                    <th>Active Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($sliders as $s)
                <tr>
                    <td>{{ $s->title }}</td>
                    <td>{{ $s->description }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="form-add-slider" class="d-none">
    <form action="" enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control form-control-sm">
        </div>
        <div class="form-group">
            <label for="">Short Description</label>
            <textarea name="short-description" class="form-control form-control-sm" row="4"></textarea>
        </div>
    </form>
</div>


@endsection

@push('js')
<script>
    $(`body #slider-add-btn`).on('click', (e)=>{
        e.preventDefault();
        riseModal('Demo Modal', `form-add-slider` );
    })
</script>
@endpush