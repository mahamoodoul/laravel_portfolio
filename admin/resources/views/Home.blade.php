@extends('Layout.app')
@section('title','Home')
@section('content')


<div class="container mt-5 ml-5">
	<div class="row">

		<div class="col-md-4 p-2">
			<div class="card">
				<div class="card-body">
					<h3 style="font-weight:bold" class="count-card-title">{{$TotalVisitor}}</h3>
					<h3 class="count-card-text">Total Visitor</h3>
				</div>
			</div>
		</div>

		<div class="col-md-4 p-2">
			<div class="card">
				<div class="card-body">
					<h3 style="font-weight:bold" class="count-card-title">{{$TotalService}}</h3>
					<h3 class="count-card-text">Total Services</h3>
				</div>
			</div>
		</div>

		<div class="col-md-4 p-2">
			<div class="card">
				<div class="card-body">
					<h3 style="font-weight:bold" class="count-card-title">{{$TotalProject}}</h3>
					<h3 class="count-card-text">Total Projects</h3>
				</div>
			</div>
		</div>

		<div class="col-md-4 p-2">
			<div class="card">
				<div class="card-body">
					<h3 style="font-weight:bold" class="count-card-title">{{$TotalCourse}}</h3>
					<h3 class="count-card-text">Total Courses</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-2">
			<div class="card">
				<div class="card-body">
					<h3 style="font-weight:bold" class="count-card-title">{{$TotalContact}}</h3>
					<h3 class="count-card-text">Total Contacts</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-2">
			<div class="card">
				<div class="card-body">
					<h3 style="font-weight:bold" class="count-card-title">{{$TotalReview}}</h3>
					<h3 class="count-card-text">Total Reviews</h3>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
