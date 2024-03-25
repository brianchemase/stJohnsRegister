@extends('training.inc.master')

@section('title','Training Dashboard')

@section('content')


<main class="content">
	<div class="container-fluid p-0">

		<div class="row mb-2 mb-xl-3">
			<div class="col-auto d-none d-sm-block">
				<h3><strong>Training Analytics</strong> Dashboard</h3>
			</div>

			<div class="col-auto ml-auto text-right mt-n1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
						<li class="breadcrumb-item"><a href="#">Training Home</a></li>
						<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
						
					</ol>
				</nav>
			</div>
		</div>

		<div class="col-md-12">
			<div class="row ">
				<div class="col-xl-4 col-lg-6" data-tilt>
					<div class="card l-bg-cherry">
						<div class="card-statistic-3 p-4">
							<div class="card-icon card-icon-large"><i class="fas fa-user-alt"></i></div>
							<div class="mb-4">
								<h5 class="card-title mb-0" style="color: white;">Students Registered</h5>
							</div>
							<div class="row align-items-center mb-2 d-flex">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0" style="color: white;">
										{{ number_format($totalStudentsRegistered) }} Students
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6" data-tilt>
					<div class="card l-bg-cherry">
						<div class="card-statistic-3 p-4">
							<div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
							<div class="mb-4">
								<h5 class="card-title mb-0" style="color: white;">Revenue Earnings</h5>
							</div>
							<div class="row align-items-center mb-2 d-flex">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0" style="color: white;">
										KSh {{ number_format($contributions, 2) }}
									</h2>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				

				

				<div class="col-xl-4 col-lg-6" data-tilt>
					<div class="card l-bg-orange-dark">
						<div class="card-statistic-3 p-4">
							<div class="card-icon card-icon-large"><i class="fas fa-mobile-alt"></i></div>
							<div class="mb-4">
								<h5 class="card-title mb-0" style="color: white;">Training Station</h5>
							</div>
							<div class="row align-items-center mb-2 d-flex">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0" style="color: white;">
									{{ number_format($trainingStations) }}
									</h2>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-xxl-5 d-flex">
				<div class="w-100">
					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Enrolments</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-light">
													<i class="align-middle" data-feather="truck"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">82,000</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Visitors</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-light">
													<i class="align-middle" data-feather="users"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">14.212</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Earnings</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-light">
													<i class="align-middle" data-feather="dollar-sign"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">$21.300</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Orders</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-light">
													<i class="align-middle" data-feather="shopping-cart"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">64</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>


		<div class="col-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill w-100">
				<div class="card-header">
					<div class="card-actions float-right">
						<div class="dropdown show">
							<a href="#" data-toggle="dropdown" data-display="static">
								<i class="align-middle" data-feather="more-horizontal"></i>
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</div>
					<h5 class="card-title mb-0"><strong>Certification Summary 2024</strong></h5>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function() {
						var chartData = @json(array_values($monthlyData));
						// Bar chart
						new Chart(document.getElementById("chartjs-dashboard-bar"), {
							type: "bar",
							data: {
								labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
								datasets: [{
									label: "Certifications",
									backgroundColor: window.theme.success,
									borderColor: window.theme.warning,
									hoverBackgroundColor: window.theme.secondary,
									hoverBorderColor: window.theme.success,
									data: chartData,
									barPercentage: .85,
									categoryPercentage: .5
								}]
							},
							options: {
								maintainAspectRatio: false,
								legend: {
									display: false
								},
								scales: {
									yAxes: [{
										gridLines: {
											display: false
										},
										stacked: false,
										ticks: {
											stepSize: 20
										}
									}],
									xAxes: [{
										stacked: false,
										gridLines: {
											color: "transparent"
										}
									}]
								}
							}
						});
					});
				</script>
				<div class="card-body d-flex w-100">
					<div class="align-self-center chart chart-lg">
						<canvas id="chartjs-dashboard-bar"></canvas>
					</div>
				</div>
			</div>
	</div>

		<div class="row">
			<div class="col-12 col-lg-8 col-xxl-9 d-flex">
				<div class="card flex-fill">
					<div class="card-header">
						<div class="card-actions float-right">
							<div class="dropdown show">
								<a href="#" data-toggle="dropdown" data-display="static">
									<i class="align-middle" data-feather="more-horizontal"></i>
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</div>
						<h5 class="card-title mb-0">Latest Projects</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
								<th>Name</th>
								<th class="d-none d-xl-table-cell">Start Date</th>
								<th class="d-none d-xl-table-cell">End Date</th>
								<th>Status</th>
								<th class="d-none d-md-table-cell">Assignee</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Project Apollo</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Vanessa Tucker</td>
							</tr>
							<tr>
								<td>Project Fireball</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-danger">Cancelled</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
							<tr>
								<td>Project Hades</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Sharon Lessman</td>
							</tr>
							<tr>
								<td>Project Nitro</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">Vanessa Tucker</td>
							</tr>
							<tr>
								<td>Project Phoenix</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
							<tr>
								<td>Project X</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Sharon Lessman</td>
							</tr>
							<tr>
								<td>Project Romeo</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">Christina Mason</td>
							</tr>
							<tr>
								<td>Project Wombat</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge bg-danger">Cancelled</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-xxl-3 d-flex">
				<div class="card flex-fill w-100">
					<div class="card-header">
						<div class="card-actions float-right">
							<div class="dropdown show">
								<a href="#" data-toggle="dropdown" data-display="static">
									<i class="align-middle" data-feather="more-horizontal"></i>
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</div>
						<h5 class="card-title mb-0">Monthly Sales</h5>
					</div>
					<div class="card-body d-flex w-100">
						<div class="align-self-center chart chart-lg">
							<canvas id="chartjs-dashboard-bar"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>



@endsection