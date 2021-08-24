@extends('layouts.main')
@section('content')
<div class="section-wrapper">
            <section class="banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="content content-style">
                                <h2>Meet Someone</h2>
                                <h3>You Can Trust</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                <a href="#" class="btn btn-black">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="image">
                                <img src="{{asset('/images/b1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="image">
                                <img src="{{asset('/images/b2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="content content-style">
                                <h2>About Us</h2>
                                <h3>We’re All The Same</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="main-title">
                            <h2>Why <span class="pri-clr">Choose Us</span></h2>
                        </div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-12 order">
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{asset('/images/l1.png')}}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Total Privacy</h5>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation. commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 order">
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{asset('/images/l2.png')}}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Video Chat</h5>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation. commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 order">
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{asset('/images/l3.png')}}" alt="">
                                </div>
                                <div class="content">
                                    <h5>News Profile Every Day</h5>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation. commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-video">
            <div class="container">
                <div class="video-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="main-title">
                                <h2>Our <span class="pri-clr">Video</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="video-inner">
                                <img src="{{asset('/images/b3.png')}}" alt="">
                                <a href="#"><img src="{{asset('/images/play.p')}}ng" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="find">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12">
                        <div class="content content-style">
                            <h2>Find Your Match At</h2>
                            <h3>We’re All The Same</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-white">Contact Us</a>
                                <a href="#" class="btn btn-pri">Sign Up Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="image">
                            <img src="{{asset('/images/b4.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="happy-client">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="main-title">
                            <h2>Our Happy <span class="pri-clr">Client’s</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="quote">
                            <div class="image">
                                <img src="{{asset('/images/quote.')}}png" alt="">
                            </div>
                        </div>
                        <div class="test-slider">
                            <div class="content">
                                <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s”</p>
                                <div class="detail">
                                    <img src="{{asset('/images/c1.png')}}" alt="">
                                    <h5>Anca Barbu</h5>
                                    <span>Accountant</span>
                                </div>
                            </div>
                            <div class="content">
                                <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s”</p>
                                <div class="detail">
                                    <img src="{{asset('/images/c1.png')}}" alt="">
                                    <h5>Anca Barbu</h5>
                                    <span>Accountant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="main-title left-title">
                            <h2>Trusting Dating <span class="pri-clr">Website</span></h2>
                        </div>
                        <div class="contact-details">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Send Us Your Mail</h5>
                                        <span>Email Us : <a href="#">info@aleesha.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Railtown Location</h5>
                                        <span>Address : <a href="#">Dumy Road  of JB USA</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Phone Number</h5>
                                        <span>Call Us : <a href="#">111 222 3333</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-details">
                            <div class="main-title">
                                <h2>Get in  <span class="pri-clr">Touch</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>
                            </div>
                            <form class="CrudForm" id="inquiry_form" data-noinfo="true" data-customcallback="inquiry_success" data-customcallbackFail="inquiry_error" method="POST" action="{{route('contactusSubmit')}}">
                            @csrf
                            <div class="form-wrapper">
                                <p>
                                {{Helper::errorField('inquiries_name',$errors)}}
                                    <input type="text" name="inquiries_name"  value="{{old('inquiries_name')}}" placeholder="Johnathan Doe">
                                {{Helper::errorField('inquiries_email',$errors)}}
                                    <input type="text" name="inquiries_email"   value="{{old('inquiries_email')}}" placeholder="Email Address">
                                {{Helper::errorField('inquiries_phone',$errors)}}
                                    <input type="text" name="inquiries_phone"  value="{{old('inquiries_phone')}}" placeholder="Phone Number">
                                {{Helper::errorField('inquiries_age',$errors)}}
                                    <input type="text" name="inquiries_age"  value="{{old('inquiries_age')}}" placeholder="Age">
                                {{Helper::errorField('inquiries_address',$errors)}}
                                    <input type="text" name="inquiries_address" class="address"  value="{{old('inquiries_address')}}" placeholder="Address :">
                                 {{Helper::errorField('extra_content',$errors)}}
                                    <textarea type="text" name="extra_content"   value="{{old('extra_content')}}" placeholder="Message :"></textarea>
                                </p>
                                <input type="submit" class="btn btn-white" value="Submit Now!">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clear-both"></div>
@endsection
@section('css')
<style type="text/css">
	/*in page css here*/
</style>
@endsection
@section('js')
<script type="text/javascript">
(()=>{
  /*in page css here*/
})()
function inquiry_error(res){
  if(res){
    if(isJSON(res)){
      res = JSON.parse(res);
      if(res.errors){
        var _errors='';
        for(j in res.errors){
          _errors+=res.errors[j].join('</br>')+'</br>';
        }
        generateNotification('0',_errors);
      }
    }
  }
}
function inquiry_success(_msg){
    if(_msg.status){
        generateNotification('1','Thank you! your message has been sent to admin.');
    $('#inquiry_form')[0].reset();
    }
}
</script>
@endsection