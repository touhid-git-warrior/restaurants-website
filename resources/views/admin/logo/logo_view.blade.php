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
                   
                    <th>Logo</th>
                    <th>Logo Name</th>
                    <th>Logo Icon</th>
                     <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($logo as $key => $data)

           

                      <tr>

                        <td>

                          @if(isset($data->image))
                          
                          <img style="width: 150px" src="{{asset($data->image)}}" class="img-fluid">

                          @endif

                        </td>

                   
                    <td>{{$data->logo_name}}</td>
                    <td><i class="{{$data->logo_icon}}"></i> </td>
                   
           
                 

                    <td><a href="{{route('adminlogo.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('adminlogo.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

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
                <h3 class="card-title">Add Logo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('adminlogo.store')}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="image">
                 

               </div>

              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="" name="logo_name" placeholder="Enter Logo Name">

        
                 

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