@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
<h3>Show Product</h3>
            <label for="" class="form-label">Name      :{{$watch->name}}</label><br>

            <label for="" class="form-label">Color     :{{$watch->color}}</label><br>

            <label for="" class="form-label">Category  :{{$watch->category}}</label><br>

            <label for="" class="form-label">Brand  :{{$watch->brand}}</label><br>

            <label for="" class="form-label">Price     :{{$watch->price}}</label><br>

            <label for="" class="form-label">Storage   :
                      <pre style="font-size:15px;margin-left: 60px;">{{$watch->storage}}</pre></label><br>

            <label for="" class="form-label">Promotion :
                <pre style="font-size:15px;margin-left: 60px;">{{$watch->promotion}}</pre></label><br>

             <label for="" class="form-label"> Image:</label>
             <br>
            <img src="/img/{{$watch->image}}" width="200px" height="200px" alt="">

    </div>
</div>

@endsection

