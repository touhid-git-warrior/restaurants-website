@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
    

    <div class="col-lg-4">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edate Chefs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('chef.edate',$chefs->id)}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="image">

                <img src="{{asset($chefs->image)}}" style="width: 150px; margin-top: 15px;">
                 

               </div>


              

                <div class="form-group">


                 <input type="text" class="form-control" value="{{$chefs->name}}" name="name" placeholder="Enter Chef Name">
                 

               </div>

                <div class="form-group">

                 

                 <input type="text" class="form-control" value="{{$chefs->post}}" name="post" placeholder="Enter Chef Designation">

              

               </div>


               <!-- social -->

               <div class="form-group">


                 <input type="text" class="form-control" value="{{$chefs->facebook}}" name="facebook" placeholder="Enter Chef Facebook">
                 

               </div>


               <div class="form-group">


                 <input type="text" class="form-control" value="{{$chefs->twitter}}" name="twitter" placeholder="Enter Chef Twitter">
                 

               </div>


                <div class="form-group">


                 <input type="text" class="form-control" value="{{$chefs->instagram}}" name="instagram" placeholder="Enter Chef Instagram">
                 

               </div>

               <!-- end social -->


                 

               <button class="btn btn-danger">Submit</button>



              </form>
              
              </div>
              <!-- /.card-body -->
            </div>
      


    </div>

  </div>


 	</div>



 </div>

@endsection