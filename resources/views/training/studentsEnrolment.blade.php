@extends('training.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Students Enrolment</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
					<div class="col-12">
					<div class="card">
					<div class="card-body">
						<form class="row row-cols-md-auto align-items-center" action="{{ route('StudentEnrolmenttab') }}" method="GET" autocomplete="off">
							

							<div class="col-12">
								<label class="sr-only" for="inlineFormInputGroupUsername2">Student Name</label>
								<div class="input-group mb-2 mr-sm-2">
									<div class="input-group-text">Student Details</div>
									<select id="inputState" class="form-control" name="q" required>
										<option selected="">Choose...</option>
										@foreach ($students as $student)
											<option value="{{ $student->id }}"> {{ $student->national_id }} - {{ $student->full_names }}</option>
										@endforeach
									</select>
								</div>
							</div>

							
							

							<div class="col-12">
								<button type="submit" class="btn btn-primary mb-2">Get Student</button>
							</div>
						</form>
					</div>
					</div>
					</div>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Student Enrolment</h5>
								</div>
								<div class="card-body">
									<form action="{{ route('register.training.station') }}" method="post">
										@csrf
										<div class="mb-3">
											<label for="station_name" class="form-label">Student Name</label>
											<input type="text" class="form-control" id="station_name" name="station_name" placeholder="Enter station name" required>
										</div>
									
										<div class="mb-3">
											<label for="location" class="form-label">Location</label>
											<input type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
										</div>
									
										<div class="mb-3">
											<label for="status" class="form-label">Course</label>
											<select class="form-select" id="status" name="status" required>
												<option selected disabled value="">Choose...</option>
												<option value="active">Active</option>
												<option value="inactive">Inactive</option>
											</select>
										</div>
									
										<button type="submit" class="btn btn-primary">Enrol student</button>
									</form>
									
								</div>
							</div>
						</div>


				</div>
			</main>
@endsection