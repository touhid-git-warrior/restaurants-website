  




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

                    
                        
            

                      <tr>

                   
                    <td>{{(isset($bookingnav->bookmenu_name))?$bookingnav->bookmenu_name:'' }}</td>

                    <td>{{(isset($bookingnav->bookmenu_href))?$bookingnav->bookmenu_href:'' }}</td>
                    
                   
           
                    @if(isset($bookingnav->id))

                    <td><a href="{{route('navbarbooking.update',$bookingnav->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('adminbooknavbar.delete',$bookingnav->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>

                    @else

                    <td></td>

                    @endif


           


                    
                 
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

                <form method="post" action="{{route('adminbooknavbar.store')}}">

                 @csrf

                  <div class="form-group">

                <input type="text" class="form-control" name="bookmenu_name" placeholder="Enter Booking Menu Name" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" name="bookmenu_href" placeholder="Enter Booking Menu Link" required>
                 


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