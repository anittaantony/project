@extends("admin_dashboard")


@section("content")
   {!! Session::has('msg') ? Session::get("msg") : '' !!}

<div class="content d-flex justify-content-center align-items-center-no mt-5">


<!-- Simple login form -->
        <form class="login-form" method="POST" action="{{URL::to('/updated_info_by_admin/'.$users->id)}}">

    
        

    {{ csrf_field() }}
    <div class="card mb-0 login-card">

    <div class="card-body p-4"> 

  
        <div class="text-center mb-1">
          
            <h4 class="mb-3" style="color:black;">Change UserDetails</h4>
            
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="required form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}" required >                    
                        <h6 style="color:black;">name</h6>
                 </div>
            </div>
            <div class="col-md-6">
                <div class="required form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="lastname" value="{{$users->lastname}}" required >                    
                        <h6 style="color:black;">lastname</h6>
                 </div>
            </div>

           
                  
         </div>



          <div class="row">

            <div class="col-md-6">
                <div class="required form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <input id="name" type="email" class="form-control" name="email" value="{{$users->email}}" required >                    
                        <h6 style="color:black;">email</h6>
                 </div>
            </div>
            <div class="col-md-6">
                <div class="required form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <input id="username" type="text" class="form-control" name="username" value="{{$users->username}}" required >                    
                        <h6 style="color:black;">lastname</h6>
                 </div>
            </div>
          </div>

           <div class="row">

           
            <div class="col-md-6">
                <div class="required form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <input id="address" type="text" class="form-control" name="address" value="{{$users->address}}" required >                    
                        <h6 style="color:black;">address</h6>
                 </div>
            </div>
          </div>


            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block text-extra-bold" style="color:black;">Update<i class="icon-circle-right2 ml-2"></i></button>
        </div>
                  
         </div>


     </div>
 </div>
</form>

<!-- /simple login form -->

</div>
@endsection
