@extends("admin_dashboard")


@section("content")
   {!! Session::has('msg') ? Session::get("msg") : '' !!}

<div class="content d-flex justify-content-center align-items-center-no mt-5">


<!-- Simple login form -->
<form class="login-form" method="POST" action="">

    
        

    {{ csrf_field() }}
    <div class="card mb-0 login-card">

    <div class="card-body p-4"> 

  
        <div class="text-center mb-1">
          
            <h4 class="mb-3" style="color:black;">View Users</h4>
            
        </div>

        <div class="row">

             <div class="invoice-content">
      <div class="table-responsive">
        <table class="table table-invoice">
          <thead>
            <tr>
              <th>No</th>
                        <th>Name</th>                                               
                        <th>Last Name</th>   
                        <th>Username</th>                                            
                        <th>Email</th>                                               
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
              <tbody>
               @foreach($users as $key=> $report)

                <tr>

                  <td>{{$key +1 }}</td>                    

                        <td>{{$report->name}}</td>                      

                        <td>{{$report->lastname}}</td>                      
                        <td>{{$report->username}}</td>                      
                        <td>{{$report->email}}</td>
                          <td>
                        <a class="btn btn-info" href="{{{ URL::to('edit_users/' . $report->id ) }}}">
                                         Edit</a>
                    </td>
                     

                   <td><a class="btn btn-danger" data-id="" href="{{{ URL::to('delete_user/' . $report->id) }}}">  Delete</a>
                   </td>                      
                       
                      
          </tr>
                  @endforeach   
        </tbody>
          </table>
        </div>
          <div class="invoice-price">                       
              <div class="invoice-price-right col-sm-offset-6">
                </div>
            </div>
    </div>
   
                  
         </div>

</form>
      
   

  

        
        
    </div>
    </div>

<!-- /simple login form -->

</div>

@endsection

