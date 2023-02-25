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
                   
                    <th>Slider Image</th>
                    <th>Slider Title</th>
                    <th>Slider Details</th>
                    <th>Button Name</th>
                    <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($slider as $key => $data)

           

                      <tr>

                        <td>

                        
                          
                          <img style="width: 150px" src="{{asset($data->bg_image)}}" class="img-fluid">

               

                        </td>
                    
                    <td>{{$data->title}}</td>
                    <td>{{$data->details}}</td>
                    <td>{{$data->button_name}}</td>
                   
           
                 

                    <td><a href="{{route('slider.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('slider.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

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
                <h3 class="card-title">Add Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="bg_image" required>
                 

               </div>

              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="" name="title" placeholder="Enter Slider Title" required>

        
                 

               </div>

                <div class="form-group">

                 

                 <input type="text" class="form-control" name="details" placeholder="Enter Slider Details" >

    

                
                 

               </div>


                <div class="form-group">

                 

                 <input type="text" class="form-control" name="button_name" placeholder="Enter Slider Button Name" >

    

                
                 

               </div>


                <div class="form-group">

                 

                 <input type="text" class="form-control" name="button_link" placeholder="Enter Slider Button Link" >

  
                 


               </div>


               <div class="form-group">

                <span>Slider Side Image</span>

                <input type="file" class="form-control" name="side_image" required>
                 

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