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
                                    <h5></h5>
                                <?php Helper::inlineEditable("h5","",'Total Privacy','HOME11');?>
                                <?php Helper::inlineEditable("p","",'Ut enim ad minim veniam, quis nostrud exercitation. commodo consequat.','HOME12');?>
                                    
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 order">
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{asset('/images/l2.png')}}" alt="">
                                </div>
                                <div class="content">
                                <?php Helper::inlineEditable("h5","",'TVideo Chat','HOME13');?>
                                <?php Helper::inlineEditable("p","",'Ut enim ad minim veniam, quis nostrud exercitation. commodo consequat.','HOME14');?>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 order">
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{asset('/images/l3.png')}}" alt="">
                                </div>
                                <div class="content">
                                <?php Helper::inlineEditable("h5","",'News Profile Every Day','HOME15');?>
                                <?php Helper::inlineEditable("p","",'Ut enim ad minim veniam, quis nostrud exercitation. commodo consequat.','HOME16');?>
                                  
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