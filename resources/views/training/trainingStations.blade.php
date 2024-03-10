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
									<form action="{{ route('register.training.station') }}" method="post">
										@csrf
										<div class="mb-3">
											<label for="station_name" class="form-label">Station Name</label>
											<input type="text" class="form-control" id="station_name" name="station_name" placeholder="Enter station name" required>
										</div>
									
										<div class="mb-3">
											<label for="location" class="form-label">Location</label>
											<input type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
										</div>
									
										<div class="mb-3">
											<label for="status" class="form-label">Status</label>
											<select class="form-select" id="status" name="status" required>
												<option selected disabled value="">Choose...</option>
												<option value="active">Active</option>
												<option value="inactive">Inactive</option>
											</select>
										</div>
									
										<button type="submit" class="btn btn-primary">Register Training Station</button>
									</form>
									
								</div>
							</div>
						</div>
					
						<div class="col-8">
						<div class="card">
								<div class="card-header">
									<h5 class="card-title">Registered Stations</h5>
									
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Station Name</th>
												<th>Location</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($stations as $station)
												<tr>
													<td>{{ $station->id }}</td>
													<td>{{ $station->station_name }}</td>
													<td>{{ $station->location }}</td>
													<td>{{ $station->status }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

				</div>
				
			</main>
@endsection