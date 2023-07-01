@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('logo.update',$logo->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="" class="form-label">Name</label>
                <input type="text" name="status" value="{{$logo->status}}"class="form-control">
                 <label for="" class="form-label"> Image</label>
                 <input type="file" name="image" class="form-control">
                 <button class="btn btn-primary mt-3 float-end">update</button>


        </form>
    </div>
</div>

@endsection

