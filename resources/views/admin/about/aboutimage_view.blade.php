@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
     <div class="col-lg-8">
      

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All About Image</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Image</th>
                    <th>Abumate Time</th>
                  
                     <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($about_image as $key => $data)

           

                      <tr>

                        <td>

                          @if(isset($data->image))
                          
                          <img style="width: 150px" src="{{asset($data->image)}}" class="img-fluid">

                          @endif

                        </td>

                   
                    <td>{{$data->image_animate_time}}</td>
                  
                   
           
                 

                    <td><a href="{{route('aboutimage.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('aboutimg.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

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
                <h3 class="card-title">Add About Image</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('aboutimage.store')}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="image">
                 

               </div>

               <img style="width: 25%;" src="">

              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="" name="image_animate_time" placeholder="Image Animate Time ">

        
                 

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