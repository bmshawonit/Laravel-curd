@extends('layout')
@section('main-content')

	<div class="main-section">
			<a class="btn btn-sm btn-info" href="{{ url('add-new-student') }}">Add New Student</a>
			<div class="card">
				<div class="card-body">
					<h2>ALL STUDENT LIST</h2>
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">SL</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Photo</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>

						<?php $i = 1; ?>
					  	@foreach($data as $d)
					  		<tr>
					      		<th><?php echo $i ; $i++; ?></th>
					      		<td>{{ $d -> full_name }}</td>
					      		<td>{{ $d -> email }}</td>
					      		<td> <img style="height:70px;width:70px" src="public/profile_photo/{{ $d -> photo }}" alt=""></td>
					      		<td>
					      			<a class="btn btn-sm btn-info" href="{{url('view-single-student', $d -> id)}}">View</a>
					      			<a class="btn btn-sm btn-warning" href="{{url('edit-single-student', $d -> id)}}">Edit</a>
					      			<a class="btn btn-sm btn-danger" href="{{url('del-single-student', $d -> id)}}">Delete</a>
					      		</td>
					    	</tr>
						@endforeach
					    
					    
					    
					  </tbody>
					</table>
			
				</div>
			</div>
		</div>

@endsection
