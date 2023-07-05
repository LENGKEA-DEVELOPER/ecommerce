@extends('layout')
@section('content')
<div class="container pt-2">

        <div class="brand3">
            <div class="imgbrands" style="background-color:#F1F1F1;align-items: center;
            justify-content: center;
            display: flex;font-size:30px; padding:6px" >
                <i class="fal fa-mobile"></i>
            </div>
            <div class=" imgbrands ">
                <a href="{{route('product.brand_phone',"apple")}}"> <img src="/img/apple.jpg" alt=""></a>
                   </div>

                   <div class=" imgbrands ">
                     <a href="{{route('product.brand_phone',"asus")}}"> <img src="/img/asus.jpg" alt=""></a>
                        </div>

                        <div class=" imgbrands ">
                         <a href="{{route('product.brand_phone',"google")}}"> <img src="/img/google.jpg" alt=""></a>
                            </div>

                            <div class=" imgbrands ">
                             <a href="{{route('product.brand_phone',"huawei")}}"> <img src="/img/huawei.jpg" alt=""></a>
                                </div>



                                        <div class=" imgbrands ">
                                         <a href="{{route('product.brand_phone',"oneplus")}}"> <img src="/img/oneplus.jpg" alt=""></a>
                                            </div>

                                            <div class=" imgbrands ">
                                             <a href="{{route('product.brand_phone',"vivo")}}"> <img src="/img/oppo.jpg" alt=""></a>
                                                </div>


                                                    <div class=" imgbrands ">
                                                     <a href="{{route('product.brand_phone',"samsung")}}"> <img src="/img/sumsung.jpg" alt=""></a>
                                                        </div>

                                                        <div class=" imgbrands ">
                                                         <a href="{{route('product.brand_phone',"vivo")}}"> <img src="/img/vivo.jpg" alt=""></a>
                                                            </div>

                                                            <div class=" imgbrands ">
                                                             <a href="{{route('product.brand_phone',"xiaomi")}}"> <img src="/img/xiaomi.jpg" alt=""></a>
                                                                </div>
        </div>
    <div class="row">
        <div class="col-12" style="background-color:#F1F1F1;padding:10px; margin-left:10px">
            PHONE
        </div>
        @foreach ($brand_phone as $item=>$val)
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5 col-5 pro mt-3">
            <a href="{{route('product.detail',$val->id)}}">
                <img src="/img/{{$val->image}}" alt="">
                <div class="des">
                </a>
                    <span>{{$val->name}}</span>
            <br>
                    <h4>${{$val->price}}</h4>
                </div>
                @include('products.product.cart')

            </div>
            @endforeach

</div>

</div>
<div class="col-12 pt-5" style="align-items: center;justify-content: center;display: flex;"> {{$brand_phone->links()}}</div>
@include('footer')
@endsection
