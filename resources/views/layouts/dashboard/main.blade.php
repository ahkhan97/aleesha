<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Any config settings you want to fetch you will get in $config array, -->
    <?php //echo $config['COMPANY']; ?>
    <title>{{isset($title)?$title:''}}</title>
    <link rel="icon" type="image/png" href="{{asset(isset($favicon)?$favicon:'')}}">
    <link rel="icon" type="image/jpg" href="{{asset(isset($favicon)?$favicon:'')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.dashboard.links')
    @yield('css')
  </head>
  <body>
	  <?php  $user = App\Model\User::where('id',Auth::id())->with('img_tab')->first(); ?>
    <input type="hidden" id="web_base_url" value="{{url('/')}}"/>
    <section class="dashboard1 pdy-20">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">

					<div id="responsive-menu-btn1">
						<a href="#" class="responsive-menu-btn1">
							<img src="{{asset('dash/images/square.png')}}">
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="logo-rs-db">
						<img src="{{asset('dash/images/logo.png')}}" alt="image not found">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-rs-login">
						<img src="{{asset('dash/images/icon-db.png')}}" alt="">

					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="dashborad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">

					<div class="logo-db">
						<img src="{{asset($logo->img_path)}}" height="66px"; alt="image not found">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="dashboard-main">


					</div>
				</div>
				<div class="col-lg-3">
					<div class="db-login">
						@if(isset($user->img_tab))
						<img alt="" src="{{ asset($user->img_tab->img_path) }}"> 
						@else
						<img src="{{asset('dash/images/icon-db.png')}}" alt="">
						@endif
						<h6><a href="">{{$user->name}} {{$user->lname}}</a></h6>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="dashboard-sidebar pdt-80">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 p-0">

					<div class="sidebar pdy-50">
						<ul>
							<li class="{{isset($dashMenu)?'active':''}}"><i class="fa fa-bars" aria-hidden="true"></i><a
									href="{{route('dashboard.index')}}">Dashboard</a></li>
							<li class="{{isset($editProfileMenu)?'active':''}}"><i class="fa fa-user" aria-hidden="true"></i><a href="{{route('dashboard.editProfile')}}">Edit Profile</a>
							</li>
							<li class="{{isset($passChangeMenu)?'active':''}}"><i class="far fa-lock-alt"></i><a href="{{route('dashboard.passwordChange')}}">Password
									Change</a></li>
									<li class="{{isset($passChangeMenu)?'active':''}}"><i class="far fa-heart"></i><a href="{{route('dashboard.wishlist')}}">Wishlist</a></li>
									<li class="{{isset($passChangeMenu)?'active':''}}"><i class="fas fa-user-friends"></i><a href="{{route('dashboard.friendrequest')}}">Friend Request</a></li>

							
							<li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="{{route('signout')}}">Logout</a></li>
						</ul>
					</div>

				</div>
				@yield('content')
			</div>
	</section>

    <div class="responsive-dashboard-main">
		<div class="inner-responsive-menu-main">

			<div class="responsive-menu-head">
					<div class="responsive-menu-btn1" id="responsive-menu-btn1">
					<a href="#"><img src="{{asset('dash/images/cancel.png')}}"></a>
				</div>
				<div class="responsive-logo">
					<a href="{{route('dashboard.editProfile')}}"><img src="{{asset('dash/images/logo.png')}}"></a>
				</div>
			
			</div>

			<div class="responsive-menu pdy-30">
				<ul>
					<li class="{{isset($dashMenu)?'active':''}}"><i class="fa fa-bars" aria-hidden="true"></i><a href="{{route('dashboard.index')}}">Dashboard</a>
					</li>
					<li class="{{isset($editProfileMenu)?'active':''}}"><i class="fa fa-user" aria-hidden="true"></i><a href="{{route('dashboard.editProfile')}}">Edit Profile</a>
					</li>
					<li class="{{isset($passChangeMenu)?'active':''}}"><i class="far fa-lock-alt"></i><a href="{{route('dashboard.passwordChange')}}">Password
							Change</a></li>

					
					<li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="{{ URL('signout') }}">Logout</a></li>
				</ul>
			</div>

		</div>
	</div>
    
    @include('layouts.dashboard.scripts')
    @yield('js')
	<script type="text/javascript">
(()=>{

 

    // @if (session('eventDash'))
    // $.toast({
    //         heading: 'Success!',
    //         position: 'bottom-right',
    //         text:  'Event Submitted For Admin Approval!',
    //         loaderBg: '#ff6849',
    //         icon: 'success',
    //         hideAfter: 2000,
    //         stack: 6
    //     });
    //     @elseif (session('productDash'))
    //     $.toast({
    //         heading: 'Success!',
    //         position: 'bottom-right',
    //         text:  'Product Submitted For Admin Approval!',
    //         loaderBg: '#ff6849',
    //         icon: 'success',
    //         hideAfter: 2000,
    //         stack: 6
    //     });
    // @endif

    // @if (session('notify_success'))
    // $.toast({
    //         heading: 'Success!',
    //         position: 'bottom-right',
    //         text:  '{{session('notify_success')}}',
    //         loaderBg: '#ff6849',
    //         icon: 'success',
    //         hideAfter: 2000,
    //         stack: 6
    //     });
    //     @endif
		@if (session('message'))
		$.toast({
				heading: 'Success!',
				position: 'bottom-right',
				text:  '{{session('notify_success')}}',
				loaderBg: '#ff6849',
				icon: 'success',
				hideAfter: 2000,
				stack: 6
			});
        @endif

})()
    </script>
  </body>
</html>