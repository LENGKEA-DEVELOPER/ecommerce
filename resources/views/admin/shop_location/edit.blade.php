@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('location.update',$location->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="" class="form-label">Status</label>
                <input type="text" name="status" value="{{$location->status}}"class="form-control">
                 <label for="" class="form-label">Title</label>
                 <input type="text" name="title" value="{{$location->title}}"class="form-control">
                 <label for="" class="form-label">URL</label>
                 <input type="text" name="url" value="{{$location->url}}"class="form-control">
                 <button class="btn btn-primary mt-3 float-end">update</button>


        </form>
    </div>
</div>

@endsection

