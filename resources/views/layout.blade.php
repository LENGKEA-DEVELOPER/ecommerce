<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/home1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></script>
<style>
    .clicksearch{
        display: none;
    }
    .clicksearch1{
        display:block;
    }
    .active2{
        display: none;

    }
    .icon button{
    border: none;
    background: white;
    }
    .logo20{
   width: 150px;
   height: 80px;

    }
    .logo20 img{
        width: 100%;
        height: 100%;
        }
</style>
</head>
<body>
    @php
        $logo=App\Models\logo::where('status','=','header')->limit(1)->get();
    @endphp
<header>
    @foreach ($logo as $item=>$val)
    <div class="logo20">
    <img src="/img/{{$val->image}}"alt="">
</div>
    @endforeach
    <div class="group">
        <ul class="navigation">
            <li><a href="{{route('product.index')}}">Home</a></li>
            <li><a href="{{route('product.phone')}}">Smartphone</a></li>
            <li><a href="{{route('product.watch')}}">Smartwatch</a></li>
            <li><a href="{{route('product.laptop')}}">Laptop</a></li>
            <li><a href="{{route('product.contact')}}">Contact</a></li>
        </ul>
            <div class="search">
                <form action="{{route('product.search')}}" method="get">
                <span class="icon" style="display: flex">
                    <ion-icon name="search-outline" class="btnsearch" style="margin-bottom:5px"></ion-icon>
                   <button><ion-icon name="search-outline" class="clicksearch"></ion-icon></button>
                    <ion-icon name="close-outline" class="btnclose"></ion-icon>
                </span>
            </div>

          <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
    </div>
    <div class="searchbox">
        <input type="text" placeholder="Search here..."name="search" value="">
    </div>
</form>

</header>
<script>
let btnsearch = document.querySelector('.btnsearch');
let btnclose = document.querySelector('.btnclose');
let clicksearch=document.querySelector('.clicksearch');
let searchbox = document.querySelector('.searchbox');
let navigation = document.querySelector('.navigation');
let menuToggle = document.querySelector('.menuToggle');
let header = document.querySelector('header');
btnsearch.onclick = function(){
    searchbox.classList.add('active');
    btnclose.classList.add('active');
    clicksearch.classList.add('clicksearch1');
    btnsearch.classList.add('active2');
    menuToggle.classList.add('hide');
    header.classList.remove('open');
}
btnclose.onclick = function(){
    searchbox.classList.remove('active');
    btnclose.classList.remove('active');
    btnsearch.classList.remove('active2');
    menuToggle.classList.remove('hide');
    btnsearch.classList.remove('hide');
    clicksearch.classList.remove('clicksearch1');
}
menuToggle.onclick = function(){
   header.classList.toggle('open');
   searchbox.classList.remove('active');
    btnclose.classList.remove('active');
    btnsearch.classList.remove('active');
}
</script>
@yield('content')
</body>
</html>
