@extends('training.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>Training</strong> Students Enrolment</h1>

				@include('training.alerts.alert')

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Student Enrolment</h5>
								</div>
								<div class="card-body">
									<!-- Button trigger modal -->
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#RegisterStudent">
													Enroll a Student
												</button>
												
												<!-- Modal -->
												@include('training.modals.studentsenrolment')
								</div>
							</div>
						</div>
					</div>

					<div class="card">
								<div class="card-header">
									<h5 class="card-title">ST John Ambulance Kenya - Enrolled Students</h5>
									<h6 class="card-subtitle text-muted">A table showing all the registered Students under the ST Johns Ambulance Training Program</h6>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Full Names</th>
												<th>National ID</th>
												<th>Station</th>
												<th>Course</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Payment Mode</th>
												<th>Acc No</th>
												<th>Registration Date</th>
												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($students as $student)
												<tr>
													<td>{{ $student->id }}</td>
													<td>{{ $student->name }}</td>
													<td>{{ $student->idno }}</td>
													<td>{{ $student->station }}</td>
													<td>{{ $student->course_name }}</td>
													<td>{{ $student->phone }}</td>
													<td>{{ $student->email }}</td>
													<td>{{ $student->paymentmode }}</td>
													<td>{{ $student->account }}</td>
													<td>{{ \Carbon\Carbon::parse($student->created_at)->format('d-m-Y') }}</td>
													
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