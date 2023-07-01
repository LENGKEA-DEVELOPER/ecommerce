@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
<h3>Show Product</h3>
            <label for="" class="form-label">Name      :{{$laptop->name}}</label><br>

            <label for="" class="form-label">Color     :{{$laptop->color}}</label><br>

            <label for="" class="form-label">Category  :{{$laptop->category}}</label><br>

            <label for="" class="form-label">Brand  :{{$laptop->brand}}</label><br>

            <label for="" class="form-label">Price     :{{$laptop->price}}</label><br>

            <label for="" class="form-label">Storage   :
                      <pre style="font-size:15px;margin-left: 60px;">{{$laptop->storage}}</pre></label><br>

            <label for="" class="form-label">Promotion :
                <pre style="font-size:15px;margin-left: 60px;">{{$laptop->promotion}}</pre></label><br>

             <label for="" class="form-label"> Image:</label>
             <br>
            <img src="/img/{{$laptop->image}}" width="200px" height="200px" alt="">

    </div>
</div>

@endsection

