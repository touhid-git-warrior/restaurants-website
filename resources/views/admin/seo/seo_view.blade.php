@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row pt-5">
    
  

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Seo Manager</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('siteseo.edate',$seo->id)}}" enctype="multipart/form-data">
                
                @csrf


               

              
                 <div class="form-group">

                  <span>Site Fav Icon</span>

                <input type="file" class="form-control" name="fav_icon">

               
                <img class="mt-2" src="{{asset($seo->fav_icon)}}">
                 


               </div>


                <div class="form-group">

                  <span>Site Title</span>


                <input type="text" class="form-control" value="{{$seo->title}}" name="title" placeholder="Enter Site Title">
                 


               </div>

                <div class="form-group">

                  <span>Seo Description</span>


                <input type="text" class="form-control" value="{{$seo->seo_description}}" name="seo_description" placeholder="Enter Site Description">
                 


               </div>

                <div class="form-group">

                  <span>Seo Keywords</span>

                <input type="text" class="form-control" value="{{$seo->keywords}}" name="keywords" placeholder="Enter Site Keywords">
                 


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