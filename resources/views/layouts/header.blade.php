

<div class="wrapper">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="logo">
                            <a href="index.html">
                            
                                <img src="{{asset($logo->img_path)}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="header-menu">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                                <li><a href="{{route('contactus')}}" class="btn btn-white">Contact Us</a></li>
                                @if(Auth::check())
                                <li><a href="{{route('signout')}}"  class="btn btn-white">Log Out </a></li>
                                @else
                                <li><a href="{{route('signinform')}}" class="btn btn-white">Log in </a></li> 
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

