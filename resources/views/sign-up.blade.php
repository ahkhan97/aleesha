@extends('layouts.main')
@section('content')

    
<section class="main-sign">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-8">
                        <div class="sign-shadow">
                            <div class="singup">
                                <div class="sign-content">
                                    <h4>Sign Up</h4>
                                    <p>Create your account</p>

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                              

                                    <form  data-noinfo="true" action="{{route('signup')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="sign-up-form">
                                        <label class="form-label">First Name</label>
                                     
                                        <input type="text" name="name" class="form-control" placeholder="">
                                        <label class="form-label">Phone No</label>
                                      
                                        <input type="text" class="form-control" name="phone" placeholder="">
                                        <label class="form-label">Gender</label>
                                     
                                        <select class="form-select form-control" name="gender" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <label for="pass">Password</label>
                                   
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sign-up-form">
                                    <label class="form-label">Last Name</label>
                                    
                                    <input type="text" class="form-control" name="lname" placeholder="">
                                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                                
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                    <label>Age</label>
                               
                                    <input type="number" class="form-control" name="age" placeholder="Age" min="1">
                                    <label for="pass">Confirm Password</label>
                                    
                                    <input type="password" class="form-control" id="pass" name="confrim-password" minlength="8">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">

                                <label>Profile Picture</label>
                                <div id="drop-area">
                                                
                                   
								    <input type="file" id="fileElem"  name="avatar" required  >
                                    <label class="button" for="fileElem">click to browse</label>
                                </div>
                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit"  class="btn btn-pri">Register</button>
                                </div>
                                </form>
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
    .btn-wrapper{
        margin: 0 auto;
    }
    #drop-area{
    border: 1px dashed #ccc;
    border-radius: 10px;
    width: 292px;
    font-family: sans-serif;
    margin: auto;
    height: 100px;
    padding-top: 44px;
    position: relative;
    background-image: url(images/drop-image.jpg);
    background-repeat: no-repeat;
    text-align: center;
    background-position: top center;
    margin-bottom: 20px;
}
#fileElem{
    display: none;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
  @if (count($errors) > 0)
         
         @foreach ($errors->all() as $error)
        generateNotification('0','{{ $error }}');         
         @endforeach
      
@endif

let dropArea = document.getElementById('drop-area');
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