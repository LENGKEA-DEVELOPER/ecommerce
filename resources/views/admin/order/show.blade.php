@extends('admin.admin_master')
@section('admin')
<style>
label{
    color: white;
    font-size:20px;
}
</style>
<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
<h2>Show Product</h2>
            <label for="" class="form-label">Customer  :{{$cart->customer}}</label><br>

            <label for="" class="form-label">Gmail     :{{$cart->gmail}}</label><br>

            <label for="" class="form-label">Telegram  :{{$cart->telephone}}</label><br>

            <label for="" class="form-label">Address   :{{$cart->address}}</label><br>

            <label for="" class="form-label">product   :{{$cart->product}}</label><br>

            <label for="" class="form-label">Price     :${{$cart->price}}</label><br>

            <label for="" class="form-label">Qty       :{{$cart->qty}}</label><br>

            <label for="" class="form-label">Total     :${{$cart->total}}</label><br>

            <img src="/img/{{$cart->image}}" width="200px" height="200px" alt="">

    </div>
</div>

@endsection

