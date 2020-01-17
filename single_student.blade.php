@extends('layout')
@section('main-content')

	<div class="main-section">
			<a class="btn btn-sm btn-info" href="{{ url('/') }}">Back to ALL Student</a>
			<div class="card">
				<div class="card-body">
					<div class="single-student">
						<img class="img-thumbnail" src="{{ URL::to('public/profile_photo/'.$singledata -> photo)}}" alt="">
						<h2>{{ $singledata -> full_name }}</h2>
						<h3>{{ $singledata -> email }}</h3>
						
					</div>
			
				</div>
			</div>
		</div>

@endsection
