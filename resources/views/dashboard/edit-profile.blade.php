@extends('layouts.dashboard.main')

@section('content')

			<div class="col-lg-8 pdy-30">
				<div class="row justify-content-center">
					<div class="profile">
						<div class="col-lg-12">
						<div class="e-profile">
							<h2>Edit Profile</h2>
							<p>Change your profile information</p>
							<div class="p-image">
                                @if(isset($user->img_tab))
								<img class="profile-img" src="{{ asset($user->img_tab->img_path) }}" width="76px"; height= "77px"; alt="">
                                @else
                                <img src="{{asset('dash/images/icon-db.png')}}" width="76px"; height= "77px"; alt="">
						        @endif
									<h2>{{ $user->name }}
									</h2>
									<p>{{ $user->email  }}</p>
								</img>
							</div>
						</div>
						
						<div class="contact-form1">
							<form action="{{ route('dashboard.submitProfile') }}" method="POST" enctype="multipart/form-data">
							@csrf
								<label>First Name</label>	
                            	<input type="text" name="name" value="{{$user->name}}" placeholder="First Name" required class=" form-control">
								
								<label>Last Name</label>
								<input type="text" name="lname" value="{{$user->lname}}" placeholder="Last Name" required class=" form-control">
								
								<label>Phone</label>
								<input type="text" name="phone" value="{{$user->phone}}"  placeholder="Your Phone Number" class=" form-control">
								
								<label>Profile Image</label><br>
								
								<input type="file" name="avatar" id="" ><br>
								<div class="update-info"><button type="submit">Update Info</button> </div>
								

							</form>
			
						</div>
							
						
						</div>
					
					</div>
				</div>
		</div>

@endsection
@section('css')
<style type="text/css">
  /*in page css here*/
.profile-img{
	border-radius: 50%;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
(()=>{
  /*in page css here*/
})()
</script>
@endsection
