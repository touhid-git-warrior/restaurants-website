@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
     <div class="col-lg-8">
      

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Logo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Image</th>
                    <th>Name</th>
                    <th>Post</th>
                     <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($chafe as $key => $data)

           

                      <tr>

                        <td>

                         
                          
                          <img style="width: 150px" src="{{asset($data->image)}}" class="img-fluid">

                    

                        </td>

                   
                    <td>{{$data->name}}</td>
                    <td>{{$data->post}}</td>
                   
           
                 

                    <td><a href="{{route('chef.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('chef.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>




                    @endforeach


                    
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>


    </div>

    <div class="col-lg-4">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Chefs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('chef.store')}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="image" required>
                 

               </div>

              


                <div class="form-group">


                 <input type="text" class="form-control" value="" name="name" placeholder="Enter Chef Name" required>
                 

               </div>

                <div class="form-group">

                 

                 <input type="text" class="form-control" name="post" placeholder="Enter Chef Post" required>

              

               </div>


               <!-- social -->

               <div class="form-group">


                 <input type="text" class="form-control" value="" name="facebook" placeholder="Enter Chef Facebook">
                 

               </div>


               <div class="form-group">


                 <input type="text" class="form-control" value="" name="twitter" placeholder="Enter Chef Twitter">
                 

               </div>


                <div class="form-group">


                 <input type="text" class="form-control" value="" name="instagram" placeholder="Enter Chef Instagram">
                 

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