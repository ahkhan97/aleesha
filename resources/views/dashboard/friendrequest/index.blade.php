@extends('layouts.dashboard.main')

@section('content')


<div class="col-lg-8 pdy-30">
                <div class="row justify-content-center">
                    <div class="profile pdy-30">
                        <div class="col-lg-12">
                            <div class="order-content pdy-30">
                                <h2>Friend Request</h2>
                            </div>

                            <table class="table table-hover table-order">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="order-list">
                                    <?php $num=1?>
                                @foreach($friendRequest as $request)
                              
                                    <tr>
                                        <th scope="row" style="padding-top:40px;">{{ $num }}</th>
                                        <td>
                                            <img src="{{asset($request->friend_req->img_tab->img_path)}}"  width="70px" height="70px" alt="">
                                        </td>
                                        <td style="padding-top:40px;">{{$request->friend_req->name}} {{$request->friend_req->lname}}</td>
                            
                                        <td style="padding-top:40px;">
                                      
                                      
                                        
                                            <a href="javascript:void(0)" class="alert alert-success accept" data-id="{{ $request->user_id }}">Accept</a>
                                            <a href="" class="alert alert-danger delete" data-id="{{ $request->user_id }}">Delete</a>
                                           

                                        </td>
                                    </tr>
                                    <?php $num++;?>
                                   @endforeach
                           
                                </tbody>
                            </table>



                        </div>

                    </div>
                </div>
              
            </div>


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
  
  $('.accept').click(function ()
		{
			var id = $(this).data("id");

            console.log(id)
			var token = $('meta[name="csrf-token"]').attr("content");

			var url = '{{ url('friend-request-accept') }}';
            

			$.ajax({
				url: url,
				type: 'post',
				data: {profile_id: id, _token:token},
				success: function(){
					$.toast({
						heading: 'Success!',
						position: 'bottom-right',
						text:  'Friend Request Accepted!',
						loaderBg: '#ff6849',
						icon: 'success',
						hideAfter: 4000,
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

        $('.delete').click(function ()
		{
			var id = $(this).data("id");

            
			var token = $('meta[name="csrf-token"]').attr("content");

			var url = '{{ url('friend-request-delete') }}';
            

			$.ajax({
				url: url,
				type: 'post',
				data: {profile_id: id, _token:token},
				success: function(){
					$.toast({
						heading: 'Delete!',
						position: 'bottom-right',
						text:  'Friend Request Deleted!',
						loaderBg: '#ff6849',
						icon: 'error',
						hideAfter: 4000,
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
