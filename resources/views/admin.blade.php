<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>CITAS MEDICAS PANEL ADMINISTRATIVO</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>
<body>

	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="blue">
				<a href="#" class="logo">
					<img src="{{ asset('assets/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ asset('assets/img/mujer.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{ asset('assets/img/mujer.png') }}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{ ucfirst(session('nombre')) }}</h4>
												<p class="text-muted">Administrador</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ url('/login') }}">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('assets/img/mujer.png') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ ucfirst(session('nombre')) }}
									<span class="user-level">Administrador</span>
									<span class="caret"></span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Citas</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ url('/appointments') }}">
                                            <span class="sub-item">Mostrar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-male"></i>
								<p>Pacientes</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/customers') }}">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-md"></i>
								<p>Médicos</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/doctors') }}">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Áreas médicas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/specialties') }}">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
							</div>
						</div>
					</div>
				</div>

				@php
					$total = DB::table('customers')->count();
					$total2 = DB::table('doctor')->count();
					$total3 = DB::table('appointment')->count();
				@endphp

				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Resumen</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Pacientes</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Doctores</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Citas</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<!-- Nuevos Pacientes -->
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos pacientes</div>
									@php
										$customers = DB::table('customers')->orderBy('apellidop', 'asc')->limit(5)->get();
									@endphp
									@if(count($customers) > 0)
										@foreach($customers as $d)
											<div class="card-list">
												<div class="item-list">
													<div class="avatar">
														<img src="{{ asset('assets/img/avatar.png') }}" alt="..." class="avatar-img rounded-circle">
													</div>
													<div class="info-user ml-3">
														<div class="username">{{ $d->apellidop }}</div>
														<div class="status">Pacientes</div>
													</div>
												</div>
											</div>
										@endforeach
									@else
										<p class="alert alert-warning"><strong>No hay datos</strong></p>
									@endif
								</div>
							</div>
						</div>

						<!-- Nuevos Doctores -->
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos doctores</div>
									@php
										$doctors = DB::table('doctor')->orderBy('apedoc', 'asc')->limit(5)->get();
									@endphp
									@if(count($doctors) > 0)
										@foreach($doctors as $d)
											<div class="card-list">
												<div class="item-list">
													<div class="avatar">
														<img src="{{ asset('assets/img/avatar.png') }}" alt="..." class="avatar-img rounded-circle">
													</div>
													<div class="info-user ml-3">
														<div class="username">{{ $d->apedoc }}</div>
														<div class="status">Doctores</div>
													</div>
												</div>
											</div>
										@endforeach
									@else
										<p class="alert alert-warning"><strong>No hay datos</strong></p>
									@endif
								</div>
							</div>
						</div>

						<!-- Nuevas Especialidades -->
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevas especialidades</div>
									@php
										$specialties = DB::table('specialty')->orderBy('nombrees', 'asc')->limit(5)->get();
									@endphp
									@if(count($specialties) > 0)
										@foreach($specialties as $d)
											<div class="card-list">
												<div class="item-list">
													<div class="info-user ml-3">
														<div class="username">{{ $d->nombrees }}</div>
														<div class="status">Especialidades</div>
													</div>
												</div>
											</div>
										@endforeach
									@else
										<p class="alert alert-warning"><strong>No hay datos</strong></p>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Core JS Files -->
	<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
	<script src="{{ asset('assets/js/setting-demo.js') }}"></script>
	<script src="{{ asset('assets/js/demo.js') }}"></script>

	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: {{ $total }},
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		});

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: {{ $total2 }},
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		});

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: {{ $total3 }},
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		});
	</script>
</body>
</html>