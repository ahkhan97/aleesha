@extends('layouts.dashboard.main')

@section('content')


<div class="col-lg-8 pdy-30">
                <div class="row justify-content-center">
                    <div class="profile pdy-30">
                        <div class="col-lg-12">
                            <div class="order-content pdy-30">
                                <h2>Event listings</h2>
                            </div>

                            <table class="table table-hover table-order">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Successful promotion</th>
                                        <th scope="col">stock quantity</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="order-list">
                                <?php $num=1;?>
                                @foreach($events as $event)
                                    <tr>
                                        <th scope="row">{{$num}}</th>
                                        <td>{{$event->title}}</td>
                                        <td>{{$event->price}}</td>
                                        <td>{{$event->pay_per_promo}}</td>
                                        <td>{{$event->stock_qty}}</td>
                                        <td>
                                            <a href="{{route('viewevents',$event->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('editevents',$event->id)}}"><i class="fas fa-pen"></i></a>
                                            <form action="{{route('deleteevent',$event->id)}}" method="POST" onsubmit="return confirm('Are u Sure')">
                                            @csrf
                                            @method('DELETE')
                                            <!-- <a href="#!"><i class="fas fa-trash-alt"></i></a> -->
                                            <button type="submit" title="Delete This Event" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    <?php $num++;?>
                           @endforeach
                                </tbody>
                            </table>






                        </div>

                    </div>
                </div>
                {!! $events->links() !!}
            </div>

@endsection
@section('css')
<style type="text/css">
  /*in page css here*/
.btn-sm{
    padding: 6px 7px;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
(()=>{
  /*in page css here*/
  let dropArea = document.getElementById('drop-area');
  @if (session('notify_success'))
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
@endsection
