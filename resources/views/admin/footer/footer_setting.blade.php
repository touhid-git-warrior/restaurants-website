@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row pt-5">
    
  

    <div class="col-lg-12">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Footer Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('footer.edate',$footer->id)}}">
                
                @csrf


                <div class="row">
                  
                  <div class="col-lg-4">

                    <h5>Footer First Side</h5>
                    

                    <div class="form-group">

                      <span>Title</span>

                <input type="text" class="form-control" value="{{$footer->title_1}}" name="title_1" placeholder="Enter Title">
                 


               </div>


               

                </div>


                <!-- 2nd footer -->


                 <div class="col-lg-4">

                    <h5>Footer Second Side</h5>
                    

                <div class="form-group">

                  <span> Title </span>

                <input type="text" class="form-control" value="{{$footer->title_2}}" name="title_2" placeholder="Enter Title 2">
                 


               </div>


                <div class="form-group">

                  <span> Location </span>

                <input type="text" class="form-control" value="{{$footer->location}}" name="location" placeholder="Enter Location">
                 


               </div>


                 <div class="form-group">

                  <span> Phone </span>

                <input type="text" class="form-control" value="{{$footer->phone}}" name="phone" placeholder="Enter Phone">
                 


               </div>




                <div class="form-group">

                   <span> Email </span>


                <input type="text" class="form-control" value="{{$footer->email}}" name="email" placeholder="Enter email">
                 


               </div>


                <div class="form-group">
                   
                   <span> Facebook Link </span>


                <input type="text" class="form-control" value="{{$footer->facebook}}" name="facebook" placeholder="Enter Facebook">
                 


               </div>

                <div class="form-group">

                   <span> Twitter Link </span>

                <input type="text" class="form-control" value="{{$footer->twitter}}" name="twitter" placeholder="Enter Twitter">
                 


               </div>

                <div class="form-group">

                   <span> Youtube Link </span>

                <input type="text" class="form-control" value="{{$footer->youtube}}" name="youtube" placeholder="Enter Youtube">
                 


               </div>

                <div class="form-group">

                   <span> Linkin Link </span>

                <input type="text" class="form-control" value="{{$footer->linkin}}" name="linkin" placeholder="Enter Linkin">
                 


               </div>

                <div class="form-group">

                   <span> Instagram Link </span>

                <input type="text" class="form-control" value="{{$footer->instagram}}" name="instagram" placeholder="Enter Instagram">
                 


               </div>



                </div>


                  <div class="col-lg-4">

                    <h5>Footer Third Side</h5>
                    

                  <div class="form-group">

                    <span>Title</span>

                <input type="text" class="form-control" value="{{$footer->title_3}}" name="title_3" placeholder="Enter Title 3">
                 


               </div>


                <div class="form-group">

                  <span>Opening Day</span>

                <input type="text" class="form-control" value="{{$footer->opening_day}}" name="opening_day" placeholder="Enter Opening Day">
                 


               </div>


                <div class="form-group">

                  <span>Opening Time</span>

                <input type="text" class="form-control" value="{{$footer->opening_time}}" name="opening_time" placeholder="Enter Opening Time">
                 


               </div>


                <div class="form-group">

                  <span>Opening Special Day</span>

                <input type="text" class="form-control" value="{{$footer->special_opening_day}}" name="special_opening_day" placeholder="Enter Opening Special Day">
                 


               </div>




                <div class="form-group">

                  <span>Opening Special Time</span>

                <input type="text" class="form-control" value="{{$footer->special_opening_time}}" name="special_opening_time" placeholder="Enter Opening Spacial Time">
                 


               </div>


                </div>


                   <div class="col-lg-4 my-3">

                    <h5>Footer Fourth Side</h5>
                    

                    <div class="form-group">

                      <span>Title</span>

                <input type="text" class="form-control" value="{{$footer->title_4}}" name="title_4" placeholder="Enter Title 4">
                 


               </div>


                <div class="form-group">

                  <span>NewsLetter Text</span>

                <input type="text" class="form-control" value="{{$footer->newslatter_desc}}" name="newslatter_desc" placeholder="Enter Newslatter Text">
                 


               </div>


                <div class="form-group">

                <span>NewsLetter Button Name</span>

                <input type="text" class="form-control" value="{{$footer->newslatter_btn}}" name="newslatter_btn" placeholder="Enter Newsletter Button">
                 


               </div>


                </div>



                </div>

                <hr>

                <h1 class="text-center">CopyRight Section</h1>


                <!-- footer Bottom -->


                <div class="row my-4">
                    
                  <div class="col-lg-6">
                    
                    <div class="form-group">

                <span>Copyright</span>

                <input type="text" class="form-control" value="{{$footer->copyright}}" name="copyright" placeholder="Enter Copyright">
                 


               </div>

                </div>


                 <div class="col-lg-6">
                    
                  <div class="form-group">

                <span>Bottom Link Name 1</span>

                <input type="text" class="form-control" value="{{$footer->other_link_1}}" name="other_link_1" placeholder="Enter Link Name">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link 1</span>

                <input type="text" class="form-control" value="{{$footer->href_1}}" name="href_1" placeholder="Enter Link">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link Name 2</span>

                <input type="text" class="form-control" value="{{$footer->other_link_2}}" name="other_link_2" placeholder="Enter Link2  Name">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link 2</span>

                <input type="text" class="form-control" value="{{$footer->href_2}}" name="href_2" placeholder="Enter Link">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link Name 3</span>

                <input type="text" class="form-control" value="{{$footer->other_link_3}}" name="other_link_3" placeholder="Enter Link Name 3">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link 3</span>

                <input type="text" class="form-control" value="{{$footer->href_3}}" name="href_3" placeholder="Enter Link 3">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link Name 4</span>

                <input type="text" class="form-control" value="{{$footer->other_link_4}}" name="other_link_4" placeholder="Enter Link Name 4">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link 4</span>

                <input type="text" class="form-control" value="{{$footer->href_4}}" name="href_4" placeholder="Enter Link 4">
                 


               </div>

                 <div class="form-group">

                <span>Bottom Link Name 5</span>

                <input type="text" class="form-control" value="{{$footer->other_link_5}}" name="other_link_5" placeholder="Enter Link Name 5">
                 


               </div>


                 <div class="form-group">

                <span>Bottom Link 5</span>

                <input type="text" class="form-control" value="{{$footer->href_5}}" name="href_5" placeholder="Enter Link 5">
                 


               </div>

                
                </div>




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