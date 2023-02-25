@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
      <div class="col-lg-8">
      

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Menus</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Image</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Short Description</th>
                    <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($menus as $data)

                      <tr>

                    <td><img style="width: 150px" src="{{asset($data->img)}}"></td>
                    <td>{{$data->Category->category_name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->short_description}}</td>
                 

                    <td><a style="margin-bottom: 10px;" href="{{route('menu.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('menu.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>


                    @endforeach


                    
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>


    </div>

    <div class="col-lg-4">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Menus</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('menu.store')}}" enctype="multipart/form-data">
                
                @csrf


                 <div class="form-group">

                <label>Select Lunch Or Dinner</label>
                  
                   <select class="form-control" name="category_id" required>

                     

                    @foreach($categorys as $category)

                     <option value="{{$category->id}}">{{$category->category_name}}</option>
                    

                    @endforeach
                     

                   </select> 


               </div>

               <div class="form-group">

                <input type="file" class="form-control" name="img" required>
                 


               </div>

                 <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Enter Menu Name" required>
                 


               </div>


                <div class="form-group">

                <input type="text" class="form-control" name="price" placeholder="Enter Menu Price" required>
                 


               </div>

                 <div class="form-group">

                <input type="text" class="form-control" name="short_description" placeholder="Enter Menu Short Description" required>
                 


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