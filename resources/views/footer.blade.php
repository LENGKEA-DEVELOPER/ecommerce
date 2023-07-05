
<link rel="stylesheet" href="/css/footer.css">

<div class="footer">
<div class="container-fluid">

        <div class="row">
        <div class="footer-col">
                <h4>Shop Location</h4>
                <ul>
                    @php
                        $location=App\Models\location::where('status','=','footer')->limit(1)->get();
                    @endphp
                    @foreach ($location as $item=>$val)

                    @endforeach
                    <li><a href="{{$val->url}}"><i class="fas fa-map-marker-alt"></i> {{$val->title}}</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>Direct Contact</h4>
                <ul>
                    @php
                    $number=App\Models\telephone::all();
                @endphp
                @foreach ($number as $item=>$val)
                <li>(+855) {{$val->telephone}}</li>
                @endforeach
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="{{route('product.phone')}}">Smartphone</a></li>
                    <li><a href="{{route('product.laptop')}}">Laptop</a></li>
                    <li><a href="{{route('product.watch')}}">Smartwatch</a></li>


                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                @php
                $follow=App\Models\follow_us::OrderBy('id','DESC')->limit(4)->get();
            @endphp
               <div class="social-link">
                <ul>
                    @foreach ($follow as $item=>$val)
                    <li><a href="{{$val->url}}"><div class="img_follow"><img src="/img/{{$val->image}}"alt=""></div><div class="name" style="height:30px; align-items: center;display:flex" > &nbsp; {{$val->name}}</div></a></li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
  <div class="copyright">
    NANG LENGKEA © 2023. All Rights Reserved
  </div>

