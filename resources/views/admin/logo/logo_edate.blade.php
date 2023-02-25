@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
     

    <div class="col-lg-4">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edate Logo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('adminlogo.edate',$logo->id)}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="image">
                 

               </div>

               <img style="width: 150px;" src="{{asset($logo->image)}}">

              


                <div class="form-group mt-2">

                

                 <input type="text" class="form-control" name="logo_name" placeholder="Enter Logo Name">

        
              

               </div>

                <div class="form-group">

                  <span>Text Logo Icon</span>

                  

                 <input type="text" class="form-control" name="logo_icon" placeholder="Enter Logo Icon" >

    

                
                 

               </div>

                 

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