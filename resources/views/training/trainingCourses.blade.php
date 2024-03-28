@extends('training.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>Training</strong> Stations</h1>
				@include('training.alerts.alert')


					<div class="row">
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Register a training Station</h5>
								</div>
								<div class="card-body">
									<form action="{{ route('register.Courses') }}" method="post" autocomplete="off">
										@csrf
										<div class="mb-3">
											<label for="course_name" class="form-label">Course Name</label>
											<input type="text" class="form-control" id="coursename" name="course_name" placeholder="Enter Course name" required>
										</div>
									
										<div class="mb-3">
											<label for="cost" class="form-label">Course Cost</label>
											<input type="text" class="form-control" id="cost" name="course_cost" placeholder="Enter Cost" required>
										</div>
									
										<div class="mb-3">
											<label for="course_duration" class="form-label">Course duration</label>
											<select class="form-select" id="course_duration" name="course_duration" required>
												<option selected disabled value="">Choose...</option>
												<option value="2 Days">2 Days</option>
												<option value="1 week">1 Week</option>
												<option value="1 month">1 Month</option>
												<option value="2 months">2 Months</option>
												<option value="3 months">3 Months</option>
												<option value="6 months">6 Months</option>
											</select>
										</div>
									
										<button type="submit" class="btn btn-primary">Register Training Course</button>
									</form>
									
								</div>
							</div>
						</div>
					
						<div class="col-8">
						<div class="card">
								<div class="card-header">
									<h5 class="card-title">Registered Courses</h5>
									
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Course Name</th>
												<th>Course Duration</th>
												<th>Course Cost</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($courses as $data)
												<tr>
													<td>{{ $data->id }}</td>
													<td>{{ $data->course_name }}</td>
													<td>{{ $data->course_duration }}</td>
													<td>{{ $data->course_cost }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

				</div>
				
			</main>
@endsection