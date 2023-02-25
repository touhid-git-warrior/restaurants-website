@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row pt-5">
    
  

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Menus Title</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('menuTitle.edate',$title->id)}}">
                
                @csrf


               

              
                 <div class="form-group">

                <input type="text" class="form-control" value="{{$title->mini_title}}" name="mini_title" placeholder="Enter Menu Mini Title">
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$title->title}}" name="title" placeholder="Enter Menu Title">
                 


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