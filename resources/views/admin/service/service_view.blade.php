@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
      <div class="col-lg-8">
      

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Services</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Details</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($about as $data)

                      <tr>

                   
                    <td><i class="{{$data->icon}}"></i></td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->shot_desc}}</td>
                 

                    <td><a style="margin-bottom: 10px;" href="{{route('about.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('about.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

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
                <h3 class="card-title">Add Service</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('adminabout.store')}}">
                
                @csrf

                 

                <div class="form-group">

                <input type="text" class="form-control" name="icon" placeholder="Enter About Icon" required>
                 


               </div>

                <div class="form-group">

                <input type="text" class="form-control" name="title" placeholder="Enter About Title" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" name="shot_desc" placeholder="Enter About Details" required>
                 


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