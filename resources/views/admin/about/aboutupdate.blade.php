@extends('admin.admin_master')
@section('content')



 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    

    <div class="col-lg-6">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('aboutdesc.edate',$aboutDesc->id)}}">
                
                @csrf

              

                <div class="form-group">

                <input type="text" class="form-control" value="{{$aboutDesc->mini_title}}" name="mini_title" placeholder="Enter About Mini Title">
                 

               </div>

     

              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="{{$aboutDesc->title}}" name="title" placeholder="Enter About Title">

        
                 

               </div>


               <div class="form-group">
                 
                <textarea class="form-control" name="description" id="">
                  
                  {!!$aboutDesc->description!!}

                </textarea>

               </div>


               <div class="form-group">

                

                 <input type="number" class="form-control" value="{{$aboutDesc->num1}}" name="num1" placeholder="Enter Years of EXPERIENCE">

        
                 

               </div>


                 <div class="form-group">

                

                 <input type="number" class="form-control" value="{{$aboutDesc->num2}}" name="num2" placeholder="Enter Popular MASTER CHEFS">

        
                 

               </div>


               <div class="form-group">

                

                 <input type="text" class="form-control" value="{{$aboutDesc->button_name}}" name="button_name" placeholder="Enter Button Name">

        
                 

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