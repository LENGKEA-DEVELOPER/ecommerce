@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('telephone.store')}}" method="post" enctype="multipart/form-data">
                @csrf
        <label for="" class="form-label">Telephone</label>
        <input type="text" name="telephone"class="form-control">
         <button class="btn btn-primary mt-3 float-end">Submit</button>

        </form>
    </div>
</div>

@endsection
