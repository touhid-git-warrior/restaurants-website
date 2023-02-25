@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edate Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('slider.edate',$slider->id)}}" enctype="multipart/form-data">
                
                @csrf

              

                <div class="form-group">

                <input type="file" class="form-control" name="bg_image">

                <img src="{{asset($slider->bg_image)}}" class="my-3" style="width: 150px;">

                <input type="hidden" value="{{$slider->bg_image}}" name="bg_image_hide">
                 

               </div>



              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="{{$slider->title}}" name="title" placeholder="Enter Slider Title">

        
                 

               </div>

                <div class="form-group">

                 

                 <input type="text" class="form-control" value="{{$slider->details}}" name="details" placeholder="Enter Slider Details" >

    

                
                 

               </div>


                <div class="form-group">

                 

                 <input type="text" class="form-control" value="{{$slider->button_name}}" name="button_name" placeholder="Enter Slider Button Name" >

    

                
                 

               </div>


                <div class="form-group">

                 

                 <input type="text" class="form-control" value ="{{$slider->button_link}}" name="button_link" placeholder="Enter Slider Button Link" >

  
                 


               </div>


               <div class="form-group">

                <span>Slider Side Image</span>

                <input type="file" class="form-control" name="side_image">
                 
                 <img src="{{asset($slider->side_image)}}" class="my-3" style="width: 150px;">

                  <input type="hidden" value="{{$slider->side_image}}" name="side_image_hide">
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