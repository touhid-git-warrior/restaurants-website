@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
     

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edate Navbar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('navbar.edate',$navbar->id)}}">
                
                @csrf

                  

                 <div class="form-group">

                <input type="text" class="form-control" value="{{$navbar->navbar_name}}" name="navbar_name" placeholder="Enter Nav Name" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$navbar->navbar_href}}" name="navbar_href" placeholder="Enter Navbar Name" required>
                 


               </div>

                 

               <button class="btn btn-danger">Edate</button>



              </form>
              
              </div>
              <!-- /.card-body -->
            </div>
      


    </div>

  </div>


 	</div>



 </div>

@endsection