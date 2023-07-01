@extends('layout')
@section('content')
<div class="slidercontainer">
<div class="slider">
<div class="slides">
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    @php
        $firstslide=App\Models\slide::where('status','=','slide')->limit(1)->get();
    @endphp
    @foreach ($firstslide as $item=>$val)
    <div class="slide first">
        <img src="/img/{{$val->image}}" alt="">
    </div>
    @endforeach
    @php
    $slide=App\Models\slide::orderBy('id','DESC')->where('status','=','slide')->limit(3)->get();
@endphp
@foreach ($slide as $item=>$val)
    <div class="slide">
        <img src="/img/{{$val->image}}" alt="">
    </div>
    @endforeach
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn1"></label>
        <label for="radio2" class="manual-btn2"></label>
        <label for="radio3" class="manual-btn3"></label>
        <label for="radio4" class="manual-btn4"></label>
    </div>

</div>

<div class="navigation-auto">
    <div class="auto-btn1"></div>
    <div class="auto-btn2"></div>
    <div class="auto-btn3"></div>
    <div class="auto-btn4"></div>
</div>


</div>
@php
    $advertising=App\Models\slide::orderBy('id','DESC')->where('status','=','advertising')->limit(2)->get();
@endphp
<div class="advertising">
@foreach ($advertising as $item=>$val)
<div class="advertising1" style="margin-top:5px">
    <img src="/img/{{$val->image}}" alt="">
</div>
@endforeach

</div>
</div>

<script type="text/javascript">
 var counter = 1;
 document.getElementById('radio' + counter).checked = true;
 var counter = 2;
setInterval(function(){

    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter>4)
    {
        counter=1;

    }

},5000);


</script>

<div class="container">
    <div class="row">
        <div class="col-12 brand">
            <div class="col-12 brands pt-2"><h2>POPULAR BRANDS</h2>

            </div>
                <div class=" imgbrand ">
                   <a href="{{route('product.brand_all',"apple")}}"> <img src="/img/apple.jpg" alt=""></a>
                      </div>

                      <div class=" imgbrand ">
                        <a href="{{route('product.brand_all',"asus")}}"> <img src="img/asus.jpg" alt=""></a>
                           </div>

                           <div class=" imgbrand ">
                            <a href="{{route('product.brand_all',"google")}}"> <img src="img/google.jpg" alt=""></a>
                               </div>

                               <div class=" imgbrand ">
                                <a href="{{route('product.brand_all',"huawei")}}"> <img src="img/huawei.jpg" alt=""></a>
                                   </div>

                                           <div class=" imgbrand ">
                                            <a href="{{route('product.brand_all',"oneplus")}}"> <img src="img/oneplus.jpg" alt=""></a>
                                               </div>

                                               <div class=" imgbrand ">
                                                <a href="{{route('product.brand_all',"oppo")}}"> <img src="img/oppo.jpg" alt=""></a>
                                                   </div>


                                                       <div class=" imgbrand ">
                                                        <a href="{{route('product.brand_all',"samsung")}}"> <img src="img/sumsung.jpg" alt=""></a>
                                                           </div>

                                                           <div class=" imgbrand ">
                                                            <a href="{{route('product.brand_all',"vivo")}}"> <img src="img/vivo.jpg" alt=""></a>
                                                               </div>

                                                               <div class=" imgbrand ">
                                                                <a href="{{route('product.brand_all',"xiaomi")}}"> <img src="img/xiaomi.jpg" alt=""></a>
                                                                   </div>
                                                                   <div class=" imgbrand ">
                                                                    <a href="{{route('product.brand_all',"lenovo")}}"> <img src="img/lenovo.jpg" alt=""></a>
                                                                       </div>

                                                   </div>

    </div>
</div>
<div class="box">

   <a href="https://t.me/LENGKEA"> <img src="img/tele.webp" alt=""></a>

</div>

<div class="container-fluid">
<div class="container">
    <div class="pro-container">
    <div class="namebr pt-3 ">
       <a href="{{route('product.brand_all',"apple")}}"> <p>View all > </p></a>
  <h2>Apple</h2>

</div>
    <div class="row"  >
@php
   $apple= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','apple')->limit(5)->get();
@endphp
@foreach ($apple as $item=>$val)


<div class="col-lg-2 col-md-3 col-sm-3 col-xs-5 col-5 pro mt-3">
<a href="{{route('product.detail',$val->id)}}">
    <img src="img/{{$val->image}}" alt="">
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


<div class="container-fluid">
    <div class="container">
        <div class="pro-container">
        <div class="namebr pt-3 ">
           <a href="{{route('product.brand_all',"samsung")}}"> <p>View all > </p></a>
      <h2>SAMSUNG</h2>

    </div>
        <div class="row"  >
            @php
            $samsung= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','samsung')->limit(5)->get();
         @endphp
          @foreach ($samsung as $item=>$val)
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

    <div class="container-fluid">
        <div class="container">
            <div class="pro-container">
            <div class="namebr pt-3 ">
               <a href="{{route('product.brand_all',"asus")}}"> <p>View all > </p></a>
          <h2>ASUS</h2>

        </div>
            <div class="row"  >
                @php
                $asus= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','asus')->limit(5)->get();
             @endphp
              @foreach ($asus as $item=>$val)
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


        <div class="container-fluid">
            <div class="container">
                <div class="pro-container">
                <div class="namebr pt-3 ">
                   <a href="{{route('product.brand_all',"google")}}"> <p>View all > </p></a>
              <h2>Google</h2>

            </div>
                <div class="row"  >
                    @php
                    $google= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','google')->limit(5)->get();
                 @endphp
                  @foreach ($google as $item=>$val)
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

            <div class="container-fluid">
                <div class="container">
                    <div class="pro-container">
                    <div class="namebr pt-3 ">
                       <a href="{{route('product.brand_all',"huawei")}}"> <p>View all > </p></a>
                  <h2>HUAWEI</h2>

                </div>
                    <div class="row"  >
                        @php
                        $huawei= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','huawei')->limit(5)->get();
                     @endphp
                      @foreach ($huawei as $item=>$val)
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



                <div class="container-fluid">
                    <div class="container">
                        <div class="pro-container">
                        <div class="namebr pt-3 ">
                           <a href="{{route('product.brand_all',"oppo")}}"> <p>View all > </p></a>
                      <h2>OPPO</h2>

                    </div>
                        <div class="row"  >
                            @php
                            $oppo= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','oppo')->limit(5)->get();
                         @endphp
                          @foreach ($oppo as $item=>$val)
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

                    <div class="container-fluid">
                        <div class="container">
                            <div class="pro-container">
                            <div class="namebr pt-3 ">
                               <a href="{{route('product.brand_all',"vivo")}}"> <p>View all > </p></a>
                          <h2>VIVO</h2>

                        </div>
                            <div class="row"  >
                                @php
                                $vivo= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','vivo')->limit(5)->get();
                             @endphp
                              @foreach ($vivo as $item=>$val)
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


                        <div class="container-fluid">
                            <div class="container">
                                <div class="pro-container">
                                <div class="namebr pt-3 ">
                                   <a href="{{route('product.brand_all',"xiaomi")}}"> <p>View all > </p></a>
                              <h2>Xiaomi</h2>

                            </div>
                                <div class="row"  >
                                    @php
                                    $xiaomi= App\Models\phone::OrderBy('viewer','DESC')->where('brand','=','xiaomi')->limit(5)->get();
                                 @endphp
                                  @foreach ($xiaomi as $item=>$val)
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

            <div class="container-fluid">
                <div class="container">
                    <div class="pro-container">
                    <div class="namebr pt-3 ">
                       <a href="{{route('product.brand_all',"lenovo")}}"> <p>View all > </p></a>
                  <h2>Lenovo</h2>

                </div>
                    <div class="row"  >

                @for ($i=0; $i<5; $i++)
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5 col-5 pro mt-3">
                <a href="">
                    <img src="img/iphone1.jpg" alt="">
                    <div class="des">
                    </a>
                        <span>iphone 14</span>
                <br>
                        <h4>$900</h4>
                    </div>
                    <a href="#2"><i class="fal fa-shopping-cart cart"></i></a>

                </div>


                @endfor
                </div>
                </div>
                                            </div>
                </div>
                @include('footer')
@endsection


