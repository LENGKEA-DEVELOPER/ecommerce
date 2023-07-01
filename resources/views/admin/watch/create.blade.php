@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('watch.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Name</label>
                <input type="text" name="name"class="form-control">
                <label for="" class="form-label">Color</label>
                <input type="text" name="color"class="form-control">
                <label for="" class="form-label">Ram</label>
                <input type="text" name="ram"class="form-control" value="No">
                <label for="" class="form-label">chip</label>
                <input type="text" name="chip"class="form-control" value="No">
                <label for="" class="form-label">Screen</label>
                <input type="text" name="screen"class="form-control" value="No">
                <label for="" class="form-label">Camera</label>
                <input type="text" name="camera"class="form-control" value="No">
                <label for="" class="form-label">Camera2</label>
                <input type="text" name="camera2"class="form-control" value="No">
                <label for="" class="form-label">Battery</label>
                <input type="text" name="battery"class="form-control" value="No">
                <label for="" class="form-label">Battery_Type</label>
                <input type="text" name="battery_type"class="form-control" value="No">
                <label for="" class="form-label">Resolution</label>
                <input type="text" name="resolution"class="form-control" value="No">
                <label for="" class="form-label">Category</label>
                <select name="category" id="" class="form-select">
                    <option value="3">Watch</option>
                </select>
                <label for="" class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price"class="form-control">
                <label for="" class="form-label">Storage</label>
                <textarea class="form-control" name="storage" id="" cols="30" rows="5"></textarea>
                <label for="" class="form-label">Promotion</label>
                <textarea class="form-control" name="promotion" id="" cols="30" rows="5"></textarea>
                 <label for="" class="form-label"> Image</label>
                 <input type="file" name="image" class="form-control">
         <button type="submit" class="btn btn-primary mt-3 float-end">Submit</button>

        </form>
    </div>
</div>

@endsection
