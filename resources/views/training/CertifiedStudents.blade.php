@extends('training.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>Training</strong> Students Certified</h1>

				@include('training.alerts.alert')

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"> Register Certified Student</h5>
								</div>
								<div class="card-body">
									<!-- Button trigger modal -->
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#RegisterStudent">
													Register Certified Student
												</button>
												
												<!-- Modal -->
												@include('training.modals.Certifiedstudentsregister')
								</div>
							</div>
						</div>
					</div>

					<div class="card">
								<div class="card-header">
									<h5 class="card-title">ST John Ambulance Kenya - Certified Trained Students</h5>
									<h6 class="card-subtitle text-muted">A table showing all the  Certified registered Students under the ST Johns Ambulance Training Program</h6>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Full Names</th>
												<th>National ID</th>
												<th>Phone</th>
												<th>Course</th>
												<th>Status</th>
												<th>Approval Date</th>
												<th>Expery Date</th>
												<th>Training Station</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($students as $student)
												<tr>
													<td>{{ $student->id }}</td>
													<td>{{ $student->full_names }}</td>
													<td>{{ $student->national_id }}</td>
													<td>{{ $student->phone }}</td>
													<td>{{ $student->course_name }}</td>
													<td>
														@if ($student->status == 'valid')
															<button type="button" class="btn btn-success">
																<i class="fas fa-check"></i> Valid
															</button>
														@else
															<button type="button" class="btn btn-danger">
																<i class="fas fa-times"></i> Expired
															</button>
														@endif
													</td>
													<td>{{ \Carbon\Carbon::parse($student->approvaldate)->format('d-m-Y') }}</td>
													<td>{{ \Carbon\Carbon::parse($student->approvaldate)->format('d-m-Y') }}</td>
													<td>{{ $student->training_location }}</td>
													<td>
														<form action="{{ route('generate-cert') }}" method="post" target="_blank">
															@csrf
															<input type="hidden" name="idno" value="{{ $student->national_id }}">
															<button type="submit" class="btn btn-primary"> <i class="fas fa-tasks"></i> Generate Cert</button>
														</form>
														
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

				</div>
				
			</main>
@endsection