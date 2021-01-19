@extends('layouts/master_1')
@section('abdurrohman_content')

<div class="main-panel">
				<div class="content">
					<div class="page-inner">
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							<div class="btn-group btn-group-page-header ml-auto">
								<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu">
									<div class="arrow"></div>
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-primary card-round">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="mdi mdi-compass-outline"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Pengajuan Pencarian</p>
													<h4 class="card-title">1,294</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-warning card-round">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="mdi mdi-bike"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Proses Pencarian</p>
													<h4 class="card-title">1303</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-success card-round">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="mdi mdi-playstation"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Konfirmasi Pencarian</p>
													<h4 class="card-title"> 1,345</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-danger card-round">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big">
													<i class="mdi mdi-heart-broken"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Tunggakan Pencarian</p>
													<h4 class="card-title">576</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-head-row">
											<div class="card-title">Statistik Berkas</div>
											<div class="card-tools">
												<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
													<span class="btn-label">
														<i class="fa fa-pencil"></i>
													</span>
													Export
												</a>
												<a href="#" class="btn btn-info btn-border btn-round btn-sm">
													<span class="btn-label">
														<i class="fa fa-print"></i>
													</span>
													Print
												</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="chart-container" style="min-height: 375px">
											<canvas id="htmlLegendsChart"></canvas>
										</div>
										<div id="myChartLegend"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@include('dashboard.scripts')