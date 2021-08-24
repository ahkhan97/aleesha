@extends('layouts.main')
@section('content')
<div class="section-wrapper">
            <section class="inner-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-12">
                            <div class="content">
                                <h2>Client’s <span class="pri-clr">Testimonials</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        
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
                                <a href="#"><img src="{{ asset('/images/play.png')}}" alt=""></a>
                            </div>
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
                                <img src="{{asset('/images/quote.png')}}" alt="">
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