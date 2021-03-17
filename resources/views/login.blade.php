@extends("layouts.app")


@section("content")
<div class="content d-flex justify-content-center align-items-center-no mt-5">


<!-- Simple login form -->
<form class="login-form" method="POST" action="/login">

    
                        

    {{ csrf_field() }}
    <div class="card mb-0 login-card">

    <div class="card-body p-4">
     

       


     
        <div class="text-center mb-1">
          
            <h4 class="mb-3" style="color:black;">Unlock Your Account</h4>
            
        </div>

     

    

        <div class="form-group" >
            <label class="block text-extra-bold mb-1" for="username" style="color:black;">Username</label>
            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus  autofocus="true">
           
            <div class="form-control-feedback">
                <!-- <i class="icon-user text-muted"></i> -->
            </div>
        </div>
     

        <div class="form-groupform-group-feedback form-group-feedback-right">
            <label class="block text-extra-bold mb-2" for="password" style="color:black;">Password</label>
            <input id="password" type="password"  class="form-control" name="password" required >
        
            <div class="form-control-feedback">
                <!-- <i class="icon-lock2 text-muted"></i> -->
            </div>
        </div>
<br>
       

       
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block text-extra-bold" style="color:black;">Sign In<i class="icon-circle-right2 ml-2"></i></button>
        </div>
   

  

        
        
    </div>
    </div>
</form>
<!-- /simple login form -->
</div>
@endsection