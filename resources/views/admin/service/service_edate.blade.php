@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
    

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edate About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('adminabout.edate',$about->id)}}">
                
                @csrf

                 

                <div class="form-group">

                <input type="text" class="form-control" value="{{$about->icon}}" name="icon" placeholder="Enter About Icon" required>
                 


               </div>

                <div class="form-group">

                <input type="text" class="form-control" value="{{$about->title}}" name="title" placeholder="Enter About Title" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$about->shot_desc}}" name="shot_desc" placeholder="Enter About Details" required>
                 


               </div>

                 

               <button class="btn btn-danger">Update</button>



              </form>





            
              
              </div>
              <!-- /.card-body -->
            </div>
      


    </div>

  </div>


 	</div>



 </div>

@endsection