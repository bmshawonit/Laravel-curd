@extends('layout')
@section('main-content')

	<div class="main-section">

			<a class="btn btn-sm btn-info" href="{{ url('/') }}">All Student List</a>
			<div class="card">
				<div class="card-body">
					<h2>Edit {{ $editdata -> full_name }} info</h2>

					<form action="{{ url('update-student-info', $editdata -> id )}}" method="POST" enctype="multipart/form-data" >
						@csrf

					  <div class="form-group">
					    <label>Full Name</label>
					    <input name="fname" type="text" value="{{ $editdata -> full_name }}" class="form-control" >
					  </div>

					  <div class="form-group">
					    <label>Email address</label>
					    <input name="email" type="text" value="{{ $editdata -> email }}" class="form-control" >

					  </div>

					  <div class="form-group">
					    <label>Photo</label>
					    <input name="photo" type="file" >
					  </div>

					  <div class="form-group">
						<input name="submit" type="submit" value="Update" class="btn btn-success btn-block"  >
					  </div> 

					</form>
			
				</div>
			</div>
		</div>

@endsection
