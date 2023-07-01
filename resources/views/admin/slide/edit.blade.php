@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('slide.update',$slide->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Status</label>
                <select name="status" id="" class="form-select">
                    <option value="slide">Slide</option>
                    <option value="advertising">Advertising</option>
                </select>
                 <label for="" class="form-label"> Image</label>
                 <input type="file" name="image" class="form-control">
                 <br>
                 <img src="/img/{{$slide->image}}" width="200px" height="200px" alt="">
                 <button class="btn btn-primary mt-3 float-end">update</button>


        </form>
    </div>
</div>

@endsection

