<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Médicos</title>
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
			<!-- End Logo Header -->

			<!-- Navbar Header -->
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
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
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
                        <li class="nav-item active">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-md"></i>
								<p>Médicos</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li class="active">
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
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Médicos</h4>
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
													<th>DNI</th>
													<th>Doctor</th>
													<th>Especialidad</th>
													<th>Nacionalidad</th>
													<th>Estado</th>
													<th>Fecha</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>DNI</th>
													<th>Doctor</th>
													<th>Especialidad</th>
													<th>Nacionalidad</th>
													<th>Estado</th>
													<th>Fecha</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												@if(isset($dato))
													@foreach ($dato as $key => $value)
														@foreach ($value as $va)
															<tr>
																<td>{{ $va->coddoc }}</td>
																<td>{{ $va->dnidoc }}</td>
																<td>{{ $va->nomdoc }} {{ $va->apedoc }}</td>
																<td>{{ $va->nombrees }}</td>
																<td>{{ $va->naciona }}</td>
																<td>
																	@if($va->estado == 1)
																		<span class="badge badge-success">Activo</span>
																	@else
																		<span class="badge badge-danger">Inactivo</span>
																	@endif
																</td>
																<td>{{ $va->fecha_create }}</td>
																<td>
																	<div class="form-button-action">
																		<button type="button" class="btn btn-link btn-primary btn-lg btn-edit" 
																				data-id="{{ $va->coddoc }}"
																				data-dnidoc="{{ $va->dnidoc }}"
																				data-nomdoc="{{ $va->nomdoc }}"
																				data-apedoc="{{ $va->apedoc }}"
																				data-codespe="{{ $va->codespe }}"
																				data-sexo="{{ $va->sexo }}"
																				data-telefo="{{ $va->telefo }}"
																				data-fechanaci="{{ $va->fechanaci }}"
																				data-correo="{{ $va->correo }}"
																				data-naciona="{{ $va->naciona }}"
																				title="Editar">
																			<i class="fa fa-edit"></i>
																		</button>
                                                                        <button type="button" class="btn btn-link btn-danger btn-lg btn-delete" 
                                                                                data-id="{{ $va->coddoc }}" 
                                                                                data-nombre="{{ $va->nomdoc }} {{ $va->apedoc }}" 
                                                                                title="Eliminar">
                                                                            <i class="fa fa-times"></i>
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

	<!-- Modal Agregar Médico -->
	<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="{{ route('doctors.store') }}" autocomplete="off">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title"><b>Nuevo Médico</b></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>DNI</label>
							<input type="text" maxlength="8" name="dnidoc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nombres</label>
							<input type="text" name="nomdoc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="apedoc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Especialidad</label>
							<select name="codespe" class="form-control" required>
								<option value="">Seleccione...</option>
								@if(isset($specialties))
									@foreach($specialties as $spec)
										<option value="{{ $spec->codespe }}">{{ $spec->nombrees }}</option>
									@endforeach
								@endif
							</select>
						</div>
						<div class="form-group">
							<label>Sexo</label>
							<select name="sexo" class="form-control" required>
								<option value="">Seleccione...</option>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							</select>
						</div>
						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" name="telefo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fecha de Nacimiento</label>
							<input type="date" name="fechanaci" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" name="correo" class="form-control">
						</div>
						<div class="form-group">
                            <label>Nacionalidad</label>
                            <select name="naciona" class="form-control" required>
                                <option value="">Seleccione...</option>
                                <option value="Peruana(o)">Peruana(o)</option>
                                <option value="Extranjera(o)">Extranjera(o)</option>
                            </select>
                        </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Único de Edición -->
	<div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form id="editForm" method="POST">
					@csrf
					@method('PUT')
					<div class="modal-header">
						<h5 class="modal-title"><b>Editar Médico</b></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="coddoc" id="edit_coddoc">
						<div class="form-group">
							<label>DNI</label>
							<input type="text" maxlength="8" name="dnidoc" id="edit_dnidoc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nombres</label>
							<input type="text" name="nomdoc" id="edit_nomdoc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="apedoc" id="edit_apedoc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Especialidad</label>
							<select name="codespe" id="edit_codespe" class="form-control" required>
								<option value="">Seleccione...</option>
								@if(isset($specialties))
									@foreach($specialties as $spec)
										<option value="{{ $spec->codespe }}">{{ $spec->nombrees }}</option>
									@endforeach
								@endif
							</select>
						</div>
						<div class="form-group">
							<label>Sexo</label>
							<select name="sexo" id="edit_sexo" class="form-control" required>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							</select>
						</div>
						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" name="telefo" id="edit_telefo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fecha de Nacimiento</label>
							<input type="date" name="fechanaci" id="edit_fechanaci" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" name="correo" id="edit_correo" class="form-control">
						</div>
						<div class="form-group">
                            <label>Nacionalidad</label>
                            <select name="naciona" class="form-control" required>
                                <option value="">Seleccione...</option>
                                <option value="Peruana(o)">Peruana(o)</option>
                                <option value="Extranjera(o)">Extranjera(o)</option>
                            </select>
                        </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
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
                        <h5 class="modal-title"><b>Eliminar Médico</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">¿Estás seguro de que deseas eliminar al médico <strong id="nombreDoctor"></strong>?</p>
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

			// Delegación global para el botón de editar
			$(document).on('click', '.btn-edit', function() {
				var id = $(this).data('id');
				
				$('#edit_coddoc').val(id);
				$('#edit_dnidoc').val($(this).data('dnidoc'));
				$('#edit_nomdoc').val($(this).data('nomdoc'));
				$('#edit_apedoc').val($(this).data('apedoc'));
				$('#edit_codespe').val($(this).data('codespe'));
				$('#edit_sexo').val($(this).data('sexo'));
				$('#edit_telefo').val($(this).data('telefo'));
				$('#edit_fechanaci').val($(this).data('fechanaci'));
				$('#edit_correo').val($(this).data('correo'));
				$('#edit_naciona').val($(this).data('naciona'));

				var actionUrl = "{{ url('/doctors') }}/" + id;
				$('#editForm').attr('action', actionUrl);

				$('#editRowModal').modal('show');
			});
		});
	</script>

    <script>
        $(document).ready(function() {
            if ($.fn.DataTable.isDataTable('#add-row')) {
                $('#add-row').DataTable().destroy();
            }
            var table = $('#add-row').DataTable({
                "pageLength": 5
            });

            // Delegación global para el botón de editar
            $(document).on('click', '.btn-edit', function() {
                var id = $(this).data('id');
                
                $('#edit_coddoc').val(id);
                $('#edit_dnidoc').val($(this).data('dnidoc'));
                $('#edit_nomdoc').val($(this).data('nomdoc'));
                $('#edit_apedoc').val($(this).data('apedoc'));
                $('#edit_codespe').val($(this).data('codespe'));
                $('#edit_sexo').val($(this).data('sexo'));
                $('#edit_telefo').val($(this).data('telefo'));
                $('#edit_fechanaci').val($(this).data('fechanaci'));
                $('#edit_correo').val($(this).data('correo'));
                $('#edit_naciona').val($(this).data('naciona'));

                var actionUrl = "{{ url('/doctors') }}/" + id;
                $('#editForm').attr('action', actionUrl);

                $('#editRowModal').modal('show');
            });

            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var nombre = $(this).data('nombre');

                $('#nombreDoctor').text(nombre);

                var actionUrl = "{{ url('/doctors') }}/" + id;
                $('#deleteForm').attr('action', actionUrl);

                $('#deleteRowModal').modal('show');
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

	@if(session('error'))
		<script>
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: '{{ session("error") }}'
			});
		</script>
	@endif
</body>
</html>