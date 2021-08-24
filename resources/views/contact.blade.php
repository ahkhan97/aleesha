@extends('layouts.main')
@section('content')
<div class="section-wrapper">
            <section class="inner-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-12">
                            <div class="content">
                                <h2>Contact <span class="pri-clr">Us</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        
        
        
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
                            <div class="form-wrapper">
                                <p>
                                    <input type="text" name="name" placeholder="Johnathan Doe">
                                    <input type="text" name="name" placeholder="Email Address">
                                    <input type="text" name="name" placeholder="Phone Number">
                                    <input type="text" name="name" placeholder="Age">
                                    <input type="text" name="name" class="address" placeholder="Address :">
                                    <textarea type="text" name="name" placeholder="Message :"></textarea>
                                </p>
                                <input type="submit" class="btn btn-white" value="Submit Now!">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
</script>
@endsection