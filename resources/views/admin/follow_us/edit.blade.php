@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('follow_us.update',$follow_us->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Name</label>
                <input type="text" name="name"class="form-control" value="{{$follow_us->name}}">
                <label for="" class="form-label">URL</label>
                <input type="text" name="url" value="{{$follow_us->url}}"class="form-control">
                 <label for="" class="form-label"> Image</label>
                 <input type="file" name="image" class="form-control">
                 <button class="btn btn-primary mt-3 float-end">update</button>


        </form>
    </div>
</div>

@endsection

