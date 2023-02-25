@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
      

    <div class="col-lg-8">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edate Menus</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('menu.edate',$menus->id)}}" enctype="multipart/form-data">
                
                @csrf


                 <div class="form-group">

                <label>Select Lunch Or Dinner</label>
                  
                   <select  class="form-control" name="category_id">

                     <option disabled selected>Select Here ..</option>

                    @foreach($categorys as $category)

                     <option value="{{$category->id}}" {{($category->id == $menus->category_id) ? 'selected' : ''}}>{{$category->category_name}}</option>
                    

                    @endforeach
                     

                   </select> 


               </div>

               <div class="form-group">

                <input type="file" class="form-control" name="img" >
                 


               </div>

               <img style="width: 150px;margin: 15px 0" src="{{asset($menus->img)}}">

                 <div class="form-group">

                <input type="text" class="form-control" value="{{$menus->name}}" name="name" placeholder="Enter Menu Name" >
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control"  value="{{$menus->price}}" name="price" placeholder="Enter Menu Price">
                 


               </div>

                 <div class="form-group">

                <input type="text" class="form-control" value="{{$menus->short_description}}" name="short_description" placeholder="Enter Menu Short Description" >
                 


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