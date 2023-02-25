@extends('admin.admin_master')
@section('content')



 <div class="content-wrapper">

 	<div class="container">
 			
  <div class="row">
    
     <div class="col-lg-6">
      

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Mini Title</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  


                  </tr>
                  </thead>
                  
                  <tbody>

                    
                        
                      @foreach($aboutData as $key => $data)

           

                      <tr>

                        <td>

                         {{$data->mini_title}}

                        </td>

                         <td>

                         {!!$data->title!!}

                        </td>

                   
                    <td>{!!$data->description!!}</td>
                  
                   
           
                 

                    <td><a href="{{route('aboutdesc.update',$data->id)}}" class="btn btn-primary">Update</a>

                    <a href="{{route('aboutdesc.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>




                    @endforeach


                    
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>


    </div>

    <div class="col-lg-6">


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                

              <form method="post" action="{{route('aboutdesc.store')}}">
                
                @csrf

              

                <div class="form-group">

                <input type="text" class="form-control" name="mini_title" placeholder="Enter About Mini Title">
                 

               </div>


              


                <div class="form-group">

                

                 <input type="text" class="form-control" value="" name="title" placeholder="Enter About Title">

        
                 

               </div>


               <div class="form-group">
                 
                <textarea class="form-control" name="description" id=""></textarea>

               </div>


               <div class="form-group">

                

                 <input type="number" class="form-control" value="" name="num1" placeholder="Enter Years of EXPERIENCE">

        
                 

               </div>


                 <div class="form-group">

                

                 <input type="number" class="form-control" value="" name="num2" placeholder="Enter Popular MASTER CHEFS">

        
                 

               </div>


               <div class="form-group">

                

                 <input type="text" class="form-control" value="" name="button_name" placeholder="Enter Button Name">

        
                 

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