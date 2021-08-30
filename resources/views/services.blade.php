@extends('layouts.main')
@section('content')
<div class="section-wrapper">
            <section class="inner-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-12">
                            <div class="content">
                                <h2>Our <span class="pri-clr">Services </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-sec about-sec-inner">
                <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="content content-style mission-content">
                                    <h2>Idea's by</h2>
                                    <h3>We're All The Same</h3>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="content content-style mission-content">
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </section>
        </div>
        
        <section class="member-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="main-title">
                            <h2>Discover <span class="pri-clr">New Member</span></h2>
                        </div>
                    </div>
                </div>
                <div class="member-wrapper">
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-lg-4 col-12">
                            <div class="member-inner">
                                <div class="image">
                                    <img src="{{$user->img_tab->img_path}}" alt="">
                                    <div class="icon">
                                        <!-- <a href="#" class="chat"><i class="fas fa-comments"></i></a> -->
                                        @if(Auth::check())
                                       
                                        @if(count(Auth::user()->wish_list) > 0)
                                        @foreach(Auth::user()->wish_list as $wish)

                                        @if($wish->person_id == $user->id)
                                        <a href="javascript:void(0)" class="unlike" data-id="{{ $user->id }}" title="Remove From wish list"><i class="fa fa-heart"></i></a>
                                        @else
                                        <a href="javascript:void(0)" class="like" data-id="{{ $user->id }}" title="Add to wish list"><i class="far fa-heart"></i></a>
                                        @endif
                                        @endforeach
                                        @else
                                        <a href="javascript:void(0)" class="like" data-id="{{ $user->id }}" title="Add to wish list"><i class="far fa-heart"></i></a>
                                        @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="content">
                                    <h2>{{$user->name}} {{$user->lname}}</h2>
                                    <h5>Age : <span class="pri-clr">{{$user->age}}</span></h5>
                                </div>
                            </div>
                        </div>
                       @endforeach
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
  $('.like').click(function ()
		{
			var id = $(this).data("id");

      

			var token = $('meta[name="csrf-token"]').attr("content");

			var url = '{{ url('add-to-wish-list') }}';
			$.ajax({
				url: url,
				type: 'post',
				data: {profile_id: id, _token:token},
				success: function(){
					$.toast({
						heading: 'Success!',
						position: 'bottom-right',
						text:  'Added To Wish List!',
						loaderBg: '#ff6849',
						icon: 'success',
						hideAfter: 2000,
						stack: 6
					});

              setInterval(() => {
                location.reload();
              }, 2000);
							
			return false;
				},
				// On fail
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
    
		});

        $('.unlike').click(function ()
		{
			var id = $(this).data("id");

      

			var token = $('meta[name="csrf-token"]').attr("content");

			var url = '{{ url('remove-from-wish-list') }}';
			$.ajax({
				url: url,
				type: 'post',
				data: {profile_id: id, _token:token},
				success: function(){
					$.toast({
						heading: 'Success!',
						position: 'bottom-right',
						text:  'Removed From Wish List!',
						loaderBg: '#ff6849',
						icon: 'success',
						hideAfter: 2000,
						stack: 6
					});

              setInterval(() => {
                location.reload();
              }, 2000);
							
			return false;
				},
				// On fail
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
    
		});
})()
</script>
@endsection