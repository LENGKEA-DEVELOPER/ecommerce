@extends('layout')
@section('content')

<link rel="stylesheet" href="/css/detail.css">

<div class = "main-wrapper">
    <div class = "container">
        <div class = "product-div">
            @foreach ($all_detail as $item=>$val)
            <div class = "product-div-left">
                <div class = "img-container">
                    <img src = "/img/{{$val->image}}" alt = "watch">
                </div>

@if ($val->category==1)
                <div class="des1">
        <div class="description">
           <div class="description1"><i class="fal fa-tablet"></i></div>
           <div class="description1"><i class="fal fa-camera"></i></div>
           <div class="description1"><i class="fal fa-memory"></i></i></div>
           <div class="description1"><i class="fal fa-battery-full"></i></div>
        </div>

        <div class="description">
            <div class="description1"><h6>{{$val->screen}}<br><p style="font-size:10px">{{$val->resolution}}</p></h6></div>
            <div class="description1"><h6>{{$val->camera}}<br><p style="font-size:10px">{{$val->camera2}}</p></h6></div>
            <div class="description1"><h6>{{$val->ram}}<br><p style="font-size:10px">{{$val->chip}}</p></h6></div>
            <div class="description1"><h6>{{$val->battery}}<br><p style="font-size:10px">{{$val->battery_type}}</p></h6></div>
        </div>
    </div>
    @endif



            </div>
            <div class = "product-div-right">
                <span class = "product-name" style="color:#d76a03">$5000</span>
                <hr style="height:2px;color:#d76a03">
                 <ul>

                 <li>{{$val->name}}</li>
        <pre style="color:#d76a03">
{{$val->storage}}</pre>
       <li>Color:{{$val->color}}</li>
  <li>Promotion:</li>
<pre style="color:#d76a03">
{{$val->promotion}}</pre>
 <li>Call us:099717800 </li>
                 </ul>
                <div class = "btn-groups">
                    <input type="number" class="number" value="1">
                    <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                </div>

                <h6 style="margin-top: 15px">Category: {{$val->brand}}</h6>


            </div>
        </div>
    </div>
    @endforeach
</div>

<script src = "js/script.js"></script>

<div class="container-fluid">
    <div class="container">
        <div class="pro-container">
        <div class="namebr pt-3 ">
      <h2>RELATED PRODUCT</h2>

    </div>
        <div class="row"  >
@foreach ($relate as $item=>$val)
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5 col-5 pro mt-3">
    <a href="{{route('product.detail',$val->id)}}">
        <img src="/img/{{$val->image}}" alt="">
        <div class="des">
        </a>
            <span>{{$val->name}}</span>
    <br>
            <h4>${{$val->price}}</h4>
        </div>
        <a href="#2"><i class="fal fa-shopping-cart cart"></i></a>

    </div>
    @endforeach
    </div>
    </div>
                                </div>
    </div>


@include('footer')
@endsection

