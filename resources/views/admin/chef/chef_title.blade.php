@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row pt-5">
    
  

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Chefs Title</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('chef.edate',$chef_title->id)}}">
                
                @csrf


               

              
                 <div class="form-group">

                <input type="text" class="form-control" value="{{$chef_title->mini_title}}" name="mini_title" placeholder="Enter Chef Mini Title">
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$chef_title->title}}" name="title" placeholder="Enter Chef Title">
                 


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