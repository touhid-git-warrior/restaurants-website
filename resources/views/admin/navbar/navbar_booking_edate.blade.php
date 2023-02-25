  




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

                <form method="post" action="{{route('adminbooknavbar.edate',$book->id)}}">

                 @csrf

                  <div class="form-group">

                <input type="text" class="form-control" value="{{$book->bookmenu_name}}" name="bookmenu_name" placeholder="Enter Booking Menu Name" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$book->bookmenu_href}}" name="bookmenu_href" placeholder="Enter Booking Menu Link" required>
                 


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