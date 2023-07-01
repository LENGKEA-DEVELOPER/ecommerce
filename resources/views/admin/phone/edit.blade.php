@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('phone.update',$phone->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Name</label>
                <input type="text" name="name"class="form-control" value="{{$phone->name}}">
                <label for="" class="form-label">Color</label>
                <input type="text" name="color"class="form-control"value="{{$phone->color}}">
                <label for="" class="form-label">Ram</label>
                <input type="text" name="ram"class="form-control"value="{{$phone->ram}}">
                <label for="" class="form-label">chip</label>
                <input type="text" name="chip"class="form-control"value="{{$phone->chip}}">
                <label for="" class="form-label">Screen</label>
                <input type="text" name="screen"class="form-control" value="{{$phone->screen}}">
                <label for="" class="form-label">Camera</label>
                <input type="text" name="camera"class="form-control" value="{{$phone->camera}}">
                <label for="" class="form-label">Camera2</label>
                <input type="text" name="camera2"class="form-control"value="{{$phone->camera2}}">
                <label for="" class="form-label">Battery</label>
                <input type="text" name="battery"class="form-control"value="{{$phone->battery}}">
                <label for="" class="form-label">Battery_Type</label>
                <input type="text" name="battery_type"class="form-control"value="{{$phone->battery_type}}">
                <label for="" class="form-label">Resolution</label>
                <input type="text" name="resolution"class="form-control"value="{{$phone->resolution}}">
                <label for="" class="form-label">Category</label>
                <input type="text" name="category"class="form-control"value="{{$phone->category}}">
                <label for="" class="form-label">Brand</label>
                <input type="text" class="form-control" name="brand" value="{{$phone->brand}}">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price"class="form-control"value="{{$phone->price}}">
                <label for="" class="form-label">Storage</label>
                <textarea class="form-control" name="storage" id="" cols="30" rows="5">{{$phone->storage}}</textarea>
                <label for="" class="form-label">Promotion</label>
                <textarea class="form-control" name="promotion" id="" cols="30" rows="5">{{$phone->promotion}}</textarea>
                 <label for="" class="form-label"> Image</label>
                 <input type="file" name="image" class="form-control">
                 <br>
                 <img src="/img/{{$phone->image}}" width="200px" height="200px" alt="">

                 <button class="btn btn-primary mt-3 float-end">update</button>


        </form>
    </div>
</div>

@endsection

