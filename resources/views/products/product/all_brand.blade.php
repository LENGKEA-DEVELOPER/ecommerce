@extends('layout')
@section('content')

<div class="container pt-2">

        <div class="brand3">
            <div class="imgbrands" style="background-color:#F1F1F1;align-items: center;
            justify-content: center;
            display: flex;padding:10px;" >
                Brand
            </div>
            <div class=" imgbrands ">
                <a href="{{route('product.brand_all',"apple")}}"> <img src="/img/apple.jpg" alt=""></a>
                   </div>

                   <div class=" imgbrands ">
                     <a href="{{route('product.brand_all',"asus")}}"> <img src="/img/asus.jpg" alt=""></a>
                        </div>

                        <div class=" imgbrands ">
                         <a href="{{route('product.brand_all',"google")}}"> <img src="/img/google.jpg" alt=""></a>
                            </div>

                            <div class=" imgbrands ">
                             <a href="{{route('product.brand_all',"huawei")}}"> <img src="/img/huawei.jpg" alt=""></a>
                                </div>



                                        <div class=" imgbrands ">
                                         <a href="{{route('product.brand_all',"oneplus")}}"> <img src="/img/oneplus.jpg" alt=""></a>
                                            </div>

                                            <div class=" imgbrands ">
                                             <a href="{{route('product.brand_all',"vivo")}}"> <img src="/img/oppo.jpg" alt=""></a>
                                                </div>


                                                    <div class=" imgbrands ">
                                                     <a href="{{route('product.brand_all',"samsung")}}"> <img src="/img/sumsung.jpg" alt=""></a>
                                                        </div>

                                                        <div class=" imgbrands ">
                                                         <a href="{{route('product.brand_all',"vivo")}}"> <img src="/img/vivo.jpg" alt=""></a>
                                                            </div>

                                                            <div class=" imgbrands ">
                                                             <a href="{{route('product.brand_all',"xiaomi")}}"> <img src="/img/xiaomi.jpg" alt=""></a>
                                                                </div>

                                                                <div class=" imgbrands ">
                                                                    <a href="{{route('product.brand_all',"lenovo")}}"> <img src="/img/lenovo.jpg" alt=""></a>
                                                                       </div>
        </div>
    <div class="row">
        <div class="col-12" style="background-color:#F1F1F1;padding:10px; margin-left:10px">
            @foreach ($brand_name as $item=>$val)
            {{$val->brand}}
            @endforeach

        </div>
        @foreach ($brand_all as $item=>$val)
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
<div class="col-12 pt-5" style="align-items: center;justify-content: center;display: flex;"> {{$brand_all->links()}}</div>
@include('footer')
@endsection
