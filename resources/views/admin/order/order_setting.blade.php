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


                

             <form method="post" action="{{route('orderSeeting.update',$Order_setting->id)}}" enctype="multipart/form-data">
                
                @csrf


               

              
                 <div class="form-group">

                <input type="text" class="form-control" value="{{$Order_setting->mini_title}}" name="mini_title" placeholder="Enter Menu Mini Title">
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$Order_setting->title}}" name="title" placeholder="Enter Menu Title">
                 


               </div>


                <div class="form-group">

                <input type="file" class="form-control" name="image">


                 <img class="my-3" style="width: 150px" src="{{asset($Order_setting->image)}}">

                 <input type="hidden" name="hid_img" value="{{$Order_setting->image}}">
                 


               </div>


               <div class="form-group">

               <input type="text" class="form-control" value="{{$Order_setting->youtube_link}}" name="youtube_link" placeholder="Enter Youtube Link">
                 


               </div>


                  <div class="form-group">

               <input type="text" class="form-control" value="{{$Order_setting->button_name}}" name="button_name" placeholder="Enter Button Name">
                 


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