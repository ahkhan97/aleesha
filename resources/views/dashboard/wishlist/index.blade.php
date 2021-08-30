@extends('layouts.dashboard.main')

@section('content')
<div class="col-lg-8 pdy-30">
<section class="member-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="main-title">
                          
                        </div>
                    </div>
                </div>
                <div class="member-wrapper">
                    <div class="row">
              @if(count($user_wishlist) > 0)
                    @foreach($user_wishlist as $user)
                    <div class="col-lg-4 col-12">
                            <div class="member-inner">
                                <div class="image">
                                    <img src="{{asset($user->img_tab->img_path)}}" alt="">
                                    <div class="icon">
                                         <!-- <a href="#" class="chat"><i class="fas fa-comments"></i></a> -->
                                         @if(Auth::check())
                                       
                                       @if(count(Auth::user()->wish_list) > 0)
                                       @foreach(Auth::user()->wish_list as $wish)

                                       @if($wish->person_id == $user->wish->id)
                                       <a href="javascript:void(0)" class="unlike" data-id="{{ $user->wish->id }}" title="Remove From wish list"><i class="fa fa-heart"></i></a>
                                       @else
                                       <a href="javascript:void(0)" class="like" data-id="{{ $user->wish->id }}" title="Add to wish list"><i class="far fa-heart"></i></a>
                                       @endif
                                       @endforeach
                                       @else
                                       <a href="javascript:void(0)" class="like" data-id="{{ $user->wish->id }}" title="Add to wish list"><i class="far fa-heart"></i></a>
                                       @endif
                                       @endif
                                    </div>
                                </div>
                                <div class="content">
                                    <h2>{{$user->wish->name}} {{$user->wish->lname}}</h2>
                                    <h5>Age : <span class="pri-clr">{{$user->wish->age}}</span></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                       
                    </div>
                </div>
                @else
                <div class="col-lg-12 col-12">
                        <div class="main-title">
                            <h2>Wishlist <span class="pri-clr">Is Empty!</span></h2>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        
</div>
@endsection
@section('css')
<style type="text/css">
  /*in page css here*/
  section.member-sec {
    margin-top: 120px;
    margin-bottom: 60px;
}
  .main-title h2 {
    font-size: 60px;
    font-weight: 300;
}
.member-wrapper .member-inner .image {
    position: relative;
}
.member-wrapper .member-inner .image {
    position: relative;
}
.member-wrapper .member-inner .image img {
    width: 100%;
    height: auto;
}
.member-wrapper .member-inner .image .icon {
    position: absolute;
    bottom: 26px;
    width: calc(100% - 80px);
    display: flex;
    justify-content: space-between;
    left: 40px;
}
.member-wrapper .member-inner .image .icon a {
    height: 65px;
    width: 65px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    line-height: 65px;
}
.member-wrapper .member-inner .image .icon a i {
    font-size: 26px;
    line-height: 65px;
    color: var(--pri-clr);
}
.member-wrapper .member-inner .image .icon a {
    height: 65px;
    width: 65px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    line-height: 65px;
}
.member-wrapper .member-inner .image .icon a i {
    font-size: 26px;
    line-height: 65px;
    color: var(--pri-clr);
}
.pri-clr {
    color: var(--pri-clr);
}
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
