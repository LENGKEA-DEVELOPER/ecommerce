<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img style="object-fit: cover;" src="/img/fb.jpg" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Admin-{{auth()->user()->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-home-heart-line"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Logo Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('logo.index')}}">All Logo</a></li>
                        <li><a href="{{route('logo.create')}}">Insert Logo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Slide Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('slide.index')}}">All Slide</a></li>
                        <li><a href="{{route('slide.create')}}">Insert Slide</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Phone Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('phone.index')}}">All Phone</a></li>
                        <li><a href="{{route('phone.create')}}">Insert Phone</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Laptop Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('laptop.index')}}">All Laptop</a></li>
                        <li><a href="{{route('laptop.create')}}">Insert Laptop</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Watch Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('watch.index')}}">All Watch</a></li>
                        <li><a href="{{route('watch.create')}}">Insert Watch</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Telephone Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('telephone.index')}}">All Telephone</a></li>
                        <li><a href="{{route('telephone.create')}}">Insert Telephone</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Follow Us Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('follow_us.index')}}">All Follow</a></li>
                        <li><a href="{{route('follow_us.create')}}">Insert Follow</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-earth-line"></i>
                        <span>Shop Location</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('location.index')}}">All Location</a></li>
                        <li><a href="{{route('location.create')}}">Insert Location</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('order.index')}}" >
                        <i class="ri-earth-line"></i>
                        <span>Order Page</span>
                    </a>

                </li>
                <li>
                    <a href="{{route('feedback.index')}}" >
                        <i class="ri-earth-line"></i>
                        <span>Feedback Page</span>
                    </a>

                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
