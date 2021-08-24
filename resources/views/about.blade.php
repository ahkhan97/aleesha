@extends('layouts.main')
@section('content')
<div class="section-wrapper">
            <section class="inner-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-12">
                            <?php Helper::inlineEditable("div",array('data-ckeditor' => "true",'class'=>"content")," <h2>About <span class='pri-clr'>Us</span></h2>",'ABOUTHEAD'); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-sec about-sec-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="image">
                            <?php Helper::dynamicImages(asset(''),'images/b2.png',array("data-width"=>"445","data-height"=>"445"),'ABOUTIMG'); ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="content content-style">
                                
                                <?php Helper::inlineEditable("h2","",'About Us','ABOUTUS1');?>
                                
                                
                                <?php Helper::inlineEditable("h3","",'We’re All The Same','ABOUTUS2');?>
                                <?php Helper::inlineEditable("p","",'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','ABOUTUS3');?>

                               
                                <?php Helper::inlineEditable("p","",'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua','ABOUTUS4');?>
                                
                                
                              
                            </div>
                        </div>
                    </div>
                    <div class="mission-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="content content-style mission-content">
                                   
                                    <?php Helper::inlineEditable("h2","",'Our','ABOUTUS6');?>
                                
                                
                                <?php Helper::inlineEditable("h3","",'Mission','ABOUTUS7');?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="content content-style mission-content">
                                <?php Helper::inlineEditable("p","",'Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','ABOUTUS5');?>
                                   <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="mission">
            <div class="container">
                <div class="row">
                    
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