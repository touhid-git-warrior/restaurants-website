@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
      <div class="col-lg-8">
      

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Menus</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Navbar Name</th>
                    <th>Navbar Href</th>
                    <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($navbar as $data)

                      <tr>

                   
                    <td>{{$data->navbar_name}}</td>
                    <td>{{$data->navbar_href}}</td>
                   
           
                 

                    <td><a style="margin-bottom: 10px;" href="{{route('navbar.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('navbar.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

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
                <h3 class="card-title">Add Navbar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('adminnavbar.store')}}">
                
                @csrf


               
              

                 <div class="form-group">

                <input type="text" class="form-control" name="navbar_name" placeholder="Enter Nav Name" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" name="navbar_href" placeholder="Enter Navbar Link" required>
                 


               </div>

                 

               <button class="btn btn-danger">Submit</button>



              </form>

              <hr>

              <span> For Booking Menu </span>



            
              
              </div>
              <!-- /.card-body -->
            </div>
      


    </div>

  </div>


 	</div>



 </div>

@endsection