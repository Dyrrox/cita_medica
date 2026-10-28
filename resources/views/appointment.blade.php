<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Citas</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>

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
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="{{ url('/admin/dashboard') }}" class="logo">
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
							<a href="{{ url('/admin/dashboard') }}" class="collapsed">
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Citas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="base">
								<ul class="nav nav-collapse">
									<li class="active">
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
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Citas</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ url('/admin/dashboard') }}">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Mostrar</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Mostrar</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">Nuevo</button>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Paciente</th>
													<th>Médico</th>
													<th>Consultorio</th>
													<th>Estado</th>
													<th style="width: 2%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Paciente</th>
													<th>Médico</th>
													<th>Consultorio</th>
													<th>Estado</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												@if(isset($dato))
													@foreach ($dato as $key => $value)
														@foreach ($value as $va)
															<tr>
																<td>{{ $va->codcit }}</td>
																<td>{{ $va->dates }}</td>
																<td>{{ $va->hour }}</td>
																<td>{{ $va->nombrep }}</td>
																<td>{{ $va->apedoc }}</td>
																<td>{{ $va->nombrees }}</td>
																<td>
                                                                    <form action="{{ route('appointments.toggle', $va->codcit) }}" method="POST" style="display:inline;">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        @if($va->estado == 1)
                                                                            <button type="submit" class="btn btn-success btn-xs" title="Hacer Pendiente">
                                                                                <i class="fa fa-check"></i> Atendido
                                                                            </button>
                                                                        @else
                                                                            <button type="submit" class="btn btn-danger btn-xs" title="Hacer Atendido">
                                                                                <i class="fa fa-clock"></i> Pendiente
                                                                            </button>
                                                                        @endif
                                                                    </form>
                                                                </td>
																<td>
                                                                    <div class="form-button-action">
                                                                        <button type="button" class="btn btn-link btn-danger btn-lg btn-delete" 
                                                                                data-id="{{ $va->codcit }}" 
                                                                                data-nombre="{{ $va->nombrep }}" 
                                                                                title="Eliminar">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
															</tr>
														@endforeach
													@endforeach
												@endif
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Agregar Nuevos Registros -->
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="card-body">
                            <form method="POST" action="{{ route('appointments.store') }}" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Fecha</label>
                                            <input name="dates" type="date" class="form-control" required placeholder="Ingrese fecha">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label>Hora</label>
                                            <input name="hour" type="time" class="form-control" required placeholder="Ingrese la hora">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Paciente</label>
                                            <select class="form-control" id="paciente" required name="codpaci">
                                                <option value="">Seleccione...</option>
                                                @if(isset($customers))
                                                    @foreach($customers as $cust)
                                                        <option value="{{ $cust->codpaci }}">{{ $cust->nombrep }} {{ $cust->apellidop }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <<div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Especialidad</label>
                                            <select class="form-control" id="codespe" required name="codespe">
                                                <option value="">Seleccione...</option>
                                                @if(isset($specialties))
                                                    @foreach($specialties as $spec)
                                                        <option value="{{ $spec->codespe }}">{{ $spec->nombrees }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Médico</label>
                                            <select class="form-control" id="coddoc" required name="coddoc">
                                                <option value="">Seleccione primero una especialidad...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancelar
                    </button>
                    <button type="submit" name="agregar" class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Único de Eliminación -->
    <div class="modal fade" id="deleteRowModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title"><b>Eliminar Cita</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas eliminar la cita del paciente <strong id="nombrePaciente"></strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Sí, eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<!-- Core JS Files -->
	<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		$(document).ready(function() {
			if ($.fn.DataTable.isDataTable('#add-row')) {
				$('#add-row').DataTable().destroy();
			}

			var table = $('#add-row').DataTable({
				"pageLength": 5
			});

			$(document).on('click', '.btn-delete', function(e) {
				e.preventDefault();
				
				var id = $(this).data('id');
				var nombre = $(this).data('nombre');

				$('#nombrePaciente').text(nombre);

				var actionUrl = "{{ url('/appointments') }}/" + id;
				$('#deleteForm').attr('action', actionUrl);

				$('#deleteRowModal').modal('show');
			});
		});
	</script>

    <script>
        $(document).ready(function() {
            $('#codespe').on('change', function() {
                var codespe = $(this).val();
                var $doctorSelect = $('#coddoc');

                // Limpiar el select de médicos
                $doctorSelect.empty();
                $doctorSelect.append('<option value="">Seleccione...</option>');

                if (codespe) {
                    $.ajax({
                        url: "{{ url('/admin/doctors-by-specialty') }}/" + codespe,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (data.length > 0) {
                                $.each(data, function(key, doctor) {
                                    $doctorSelect.append('<option value="' + doctor.coddoc + '">' + doctor.nomdoc + ' ' + doctor.apedoc + '</option>');
                                });
                            } else {
                                $doctorSelect.append('<option value="">No hay médicos en esta especialidad</option>');
                            }
                        },
                        error: function() {
                            alert('Hubo un error al cargar los médicos.');
                        }
                    });
                }
            });
        });
    </script>


    
	@if(session('success'))
		<script>
			Swal.fire({
				position: 'top-end',
				icon: 'success',
				title: '{{ session("success") }}',
				showConfirmButton: false,
				timer: 1500
			});
		</script>
	@endif
</body>
</html>