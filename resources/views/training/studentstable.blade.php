@extends('training.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>Training</strong> Students Registration</h1>

				@include('training.alerts.alert')

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Student Register</h5>
								</div>
								<div class="card-body">
									<!-- Button trigger modal -->
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#RegisterStudent">
													Register a Student
												</button>
												
												<!-- Modal -->
												@include('training.modals.studentsregister')
								</div>
							</div>
						</div>
					</div>

					<div class="card">
								<div class="card-header">
									<h5 class="card-title">ST John Ambulance Kenya - Registered Students</h5>
									<h6 class="card-subtitle text-muted">A table showing all the registered Students under the ST Johns Ambulance Training Program</h6>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Full Names</th>
												<th>National ID</th>
												<th>Gender</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Registration Date</th>
												<th>Registered By</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($students as $student)
												<tr>
													<td>{{ $student->id }}</td>
													<td>{{ $student->full_names }}</td>
													<td>{{ $student->national_id }}</td>
													<td>{{ $student->gender }}</td>
													<td>{{ $student->phone }}</td>
													<td>{{ $student->email }}</td>
													<td>{{ \Carbon\Carbon::parse($student->registration_date)->format('d-m-Y') }}</td>
													<td>{{ $student->registered_by }}</td>
													<td> </td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

				</div>
				
			</main>
@endsection