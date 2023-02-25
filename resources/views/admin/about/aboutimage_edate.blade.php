@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    

    <div class="col-lg-8">


       <div class="card mt-5">
              <div class="card-header">
                <h3 class="card-title">Update About Image</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('aboutimage.edate',$about_img->id)}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="image">
                 

               </div>

               <img class="my-2" style="width: 20%;" src="{{asset($about_img->image)}}">

              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="{{$about_img->image_animate_time}}" name="image_animate_time" placeholder="Image Animate Time ">

        
                 

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