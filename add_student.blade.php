@extends('layout')
@section('main-content')

	<div class="main-section">

			<a class="btn btn-sm btn-info" href="{{ url('/') }}">All Student List</a>
			<div class="card">
				<div class="card-body">
					<h2>Add New Student</h2>
					<form action="{{ url('add-new-student-info') }}" method="POST" enctype="multipart/form-data" >
						@csrf

					  <div class="form-group">
					    <label>Full Name</label>
					    <input name="fname" type="text" class="form-control" >
					  </div>

					  <div class="form-group">
					    <label>Email address</label>
					    <input name="email" type="text" class="form-control" >
					  </div>

					  <div class="form-group">
					    <label>Photo</label>
					    <input name="photo" type="file" >
					  </div>

					  <div class="form-group">
						<input name="submit" type="submit" value="SUBMIT" class="btn btn-success btn-block"  >
					  </div> 

					</form>
			
				</div>
			</div>
		</div>

@endsection
