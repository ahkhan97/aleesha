@extends('layouts.main')
@section('content')

<section class="login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <form action="{{route('signin')}}" method="POST">
                            @csrf
                        <div class="sign-shadow">
                            <div class="singup">
                                <div class="sign-content">
                                    <h4>Log In</h4>
                                    <p>Login your account</p>

                                </div>
                            </div>
                            <div class="sign-up-form">
                                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="useremail" placeholder="name@example.com">
                                    <label for="pass">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>                                
                               
                                 
                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit" class="btn btn-pri">Login</button>
                                </div>
                                <br/>
                                <div class="btn-wrapper">
                                    <a href="{{route('signupform')}}">Don't have account? Sign Up!</a>
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
 @if (count($errors) > 0)
         
         @foreach ($errors->all() as $error)
           
generateNotification('0','{{ $error }}'); 
           
                
         @endforeach
      
@endif
(()=>{
  /*in page css here*/
})()
</script>
@endsection