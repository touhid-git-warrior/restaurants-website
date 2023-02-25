@extends('admin.admin_master')
@section('content')

 <div class="content-wrapper">

 	<div class="container">
 			
 		 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Name</th>
                    <th>Email</th>
                    <th>Order Date</th>
                    <th>Order Time</th>
                    <th>Person</th>
                    <th>Note</th>
                    <th>Action</th>


                  </tr>
                  </thead>
                  
                  <tbody>

                  	
                  			
                  		@foreach($orders as $data)

                  		<tr>

                  	<td>{{$data->name}}</td>
                  	<td>{{$data->email}}</td>
                  	<td>{{$data->date}}</td>
                  	<td>{{$data->time}}</td>
                  	<td>{{$data->people}}</td>
                  	<td>{{$data->note}}</td>

                  	<td><a href="{{route('order.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>

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