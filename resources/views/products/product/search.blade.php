@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="pro-container">
        <div class="namebr pt-3 ">
      <h2 style="font-size:25px">Result Search.. </h2>

    </div>
        <div class="row"  >
    @foreach ($product_search as $item=>$val)
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5 col-5 pro mt-3">
    <a href="{{route('product.detail',$val->id)}}">
        <img src="/img/{{$val->image}}" alt="">
        <div class="des">
        </a>
            <span>{{$val->name}}</span>
    <br>
    {{$val->icon}}
            <h4>${{$val->price}}</h4>
        </div>
        @include('products.product.cart')

    </div>
    @endforeach

    </div>
    </div>
                                </div>
    </div>
@include('footer')
@endsection
