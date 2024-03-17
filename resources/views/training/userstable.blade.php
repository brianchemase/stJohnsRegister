@extends('training.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>SJAK Training</strong> Users Table</h1>
				@if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
					<div class="alert-message">
						<strong>{{ $message }}</strong> 
					</div>
				</div>
				@endif

				@if (count($errors) > 0)
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
					<div class="alert-message">
						<strong>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
						</strong> 
					</div>
				</div>	
				
				@endif

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">User registration</h5>
								</div>
								<div class="card-body">
									<!-- Button to trigger modal -->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
										Register User
										</button>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">User Registration to SJAK Portal</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<!-- Registration Form -->
												<form method="POST" action="{{ route('registerUser') }}" class="signin-form">
								
												@csrf

												<div class="form-group mt-3">
													<label class="form-control-placeholder" for="names">Full Names</label>
													<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
													
												</div>

												<div class="form-group mt-3">
													<label class="form-control-placeholder" for="email">Email Address</label>
													<input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
													
												</div>

												<div class="form-group mt-3">
													<label class="form-control-placeholder" for="phone">Phone no (country code)</label>
													<input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
													
												</div>

												

												<div class="form-group mt-3">
													<label class="form-control-placeholder" for="username">Role</label>
													<select class="form-control" name="role" required>
														<option value="0" {{ old('role') == '0' ? 'selected' : '' }}>Student</option>
														<option value="1" {{ old('role') == '1' ? 'selected' : '' }}>Accounts</option>
														<option value="2" {{ old('role') == '2' ? 'selected' : '' }}>Training</option>
														<option value="3" {{ old('role') == '3' ? 'selected' : '' }}>Admin</option>
													</select>
												</div>
												

												 
											
												<div class="form-group">
													<label class="form-control-placeholder" for="password">Password</label>
													<input id="password-field" type="password" class="form-control" name="password" required>
													
													
												</div>

												<div class="form-group">
													<label class="form-control-placeholder" for="password">Confirm Password</label>
													<input id="password-field" type="password" class="form-control" name="password_confirmation" required>
													
													
												</div>

												<!-- Add other form fields here -->

												
												<div class="form-group d-md-flex">
												</div>
												
												<!-- End Registration Form -->
										
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Register User</button>
												</div>
												</form>
											</div>
										</div>
										</div>

								</div>
							</div>
						</div>
					</div>

					<div class="card">
								<div class="card-header">
									<h5 class="card-title">Users In the System</h5>
									<h6 class="card-subtitle text-muted">This Shows the available users in the system</h6>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												
												<th>Role</th>
												<th>Registered At</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($users as $user)
												<tr>
													<td>{{ $user->id }}</td>
													<td>{{ $user->name }}</td>
													<td>{{ $user->email }}</td>
													<td>{{ $user->phone }}</td>
													
													<td>{{ $user->role }}</td>
													<td>{{ $user->created_at->format('d-m-Y H:i:s') }}</td>
													<td> 
													<a href="#viewAgentModal{{$user->id}}" title="View Client" data-toggle="modal" class="btn btn-success"><i class="fa fa-eye"></i> </a> 
													<a href="#editUserModal{{$user->id}}" title="Edit User" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
													<a href="#changePasswordModal{{$user->id}}" title="Change Password" data-toggle="modal" class="btn btn-primary"><i class="fa fa-key"></i></a>

														@include('training.modals.modal')
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