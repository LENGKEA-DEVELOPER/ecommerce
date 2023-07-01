@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('location.store')}}" method="post" enctype="multipart/form-data">
                @csrf
        <label for="" class="form-label">Status</label>
            <select name="status" id="" class="form-select">
                <option value="header">Header</option>
                <option value="footer">Fooder</option>
            </select>
        <label for="" class="form-label">Title</label>
        <input type="text" name="title"class="form-control">
        <label for="" class="form-label">URL</label>
        <input type="text" name="url"class="form-control">
         <button class="btn btn-primary mt-3 float-end">Submit</button>

        </form>
    </div>
</div>

@endsection
