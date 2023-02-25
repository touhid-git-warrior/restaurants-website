@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row pt-5">
    
  

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('contactsetting.edate',$contact_setting->id)}}">
                
                @csrf


               

              
                 <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->mini_title}}" name="mini_title" placeholder="Enter Menu Mini Title">
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->title}}" name="title" placeholder="Enter Menu Title">
                 


               </div>

               <span>Booking Support</span>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->header_title_1}}" name="header_title_1">
                 


               </div>

                <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->header_info_1}}" name="header_info_1">
                 


               </div>

               <span>General Support</span>

               <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->header_title_2}}" name="header_title_2">
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->header_info_2}}" name="header_info_2">
                 


               </div>

               <span>Technical Support</span>



               <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->header_title_3}}" name="header_title_3">
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->header_info_3}}" name="header_info_3">
                 


               </div>

               <span>Google Map</span>


                <div class="form-group">

                  <textarea style="height: 200px;" class="form-control" name="google_map" >
                    
                    {!!$contact_setting->google_map!!}


                  </textarea>

              
              
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" value="{{$contact_setting->button_name}}" name="button_name">
                 


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