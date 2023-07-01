@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
<h3>Show Product</h3>
            <label for="" class="form-label">Name      :{{$phone->name}}</label><br>

            <label for="" class="form-label">Color     :{{$phone->color}}</label><br>

            <label for="" class="form-label">Ram       :{{$phone->ram}}</label><br>

            <label for="" class="form-label">Chip       :{{$phone->chip}}</label><br>

            <label for="" class="form-label">Screen    :{{$phone->screen}}</label><br>

            <label for="" class="form-label">Camera    :{{$phone->camera}}</label><br>

            <label for="" class="form-label">Camera2    :{{$phone->camera2}}</label><br>

            <label for="" class="form-label">Battery     :{{$phone->battery}}</label><br>

            <label for="" class="form-label">Battery_Type     :{{$phone->battery_type}}</label><br>

            <label for="" class="form-label">Resolution     :{{$phone->resolution}}</label><br>

            <label for="" class="form-label">Category  :{{$phone->category}}</label><br>

            <label for="" class="form-label">Brand  :{{$phone->brand}}</label><br>

            <label for="" class="form-label">Price     :{{$phone->price}}</label><br>

            <label for="" class="form-label">Storage   :
                      <pre style="font-size:15px;margin-left: 60px;">{{$phone->storage}}</pre></label><br>

            <label for="" class="form-label">Promotion :
                <pre style="font-size:15px;margin-left: 60px;">{{$phone->promotion}}</pre></label><br>

             <label for="" class="form-label"> Image:</label>
             <br>
            <img src="/img/{{$phone->image}}" width="200px" height="200px" alt="">

    </div>
</div>

@endsection

