@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
 		 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Contact</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                   
                    <th>Action</th>


                  </tr>
                  </thead>
                  
                  <tbody>

                  	
                  			
                  		@foreach($contacts as $data)

                  		<tr>

                  	<td>{{$data->name}}</td>
                  	<td>{{$data->email}}</td>
                  	<td>{{$data->subject}}</td>
                  	<td>{{$data->message}}</td>
                  	

                  	<td><a href="{{route('message.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

                  	</tr>


                  	@endforeach


                  	
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>


 	</div>



 </div>

@endsection