<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-pencil-square-o fa-fw "></i>OPERACIONES</h1>
	</div>
</div>
<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">
				<header>
					<h2>Novedad de Operadores</h2>
				</header>

				<div class="widget-body fuelux">

					<div class="wizard" data-initialize="wizard" id="myWizard">
						<div class="borderline">
							<div class="steps-container">
								<ul class="steps">
									<li data-step="1" class="active">
										<span class="badge badge-info">1</span>Paso 1<span class="chevron"></span>
									</li>
									<li data-step="2">
										<span class="badge">2</span>Paso 2<span class="chevron"></span>
									</li>
									<li data-step="3">
										<span class="badge">3</span>Paso 3<span class="chevron"></span>
									</li>
								</ul>
							</div>
							<div class="actions">
								<button type="button" class="btn btn-sm btn-primary btn-prev active"
								        style="border-radius: 10px">
									<i class="fa fa-arrow-left"></i>Ant
								</button>
								<button type="button" class="btn btn-sm btn-success btn-next"
								        style="border-radius: 10px" data-last="Guardar">
									Sig<i class="fa fa-arrow-right"></i>
								</button>
							</div>
						</div>
						<div style="clear:both;"></div>
						<div class="step-content">
							<form class="form-horizontal" id="danioform">
								<div class="step-pane active sample-pane alert" data-step="1">
									<h3><strong>Paso 1 </strong> - Datos Iniciales</h3>
									<fieldset>
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS GENERALES</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">TIPO
																	NOVEDAD</label>
																<div class="col-md-8 col-xs-12">
																	<select id="tiponovedad" name="tiponovedad"
																	        class="form-control select">
																		@foreach($tiponovedades as $tiponovedad)
																			<option value="{{$tiponovedad->IdTipoData}}-{{$tiponovedad->IdCodigoData}}">
																				{{$tiponovedad->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">ESPECIFICACION</label>
																<div class="col-md-8 col-xs-12">
																	<select id="especificacion" name="especificacion"
																	        class="form-control select">
																		@foreach($especificaciones as $especificacion)
																			<option value="{{$especificacion->IdTipoNovedad}}">
																				{{$especificacion->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">FECHA</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="fa fa-calendar"></i></span>
																		<input type="date" name="fecha" id="fecha"
																		       class="form-control"/>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">DETALLE</label>
																<div class="col-md-8 col-xs-12">
																	<select id="detalle" name="detalle"
																	        class="form-control select">
																		@foreach($detalles as $detalle)
																			<option value="{{$detalle->IdTipoNovedadDet}}">
																				{{$detalle->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS DEL OPERADOR</div>
													<div class="panel-body">
														<div id="imgdiv" class="col-md-3 col-xs-12">
															<img class="img-responsive"
															     src="img/fotosempleados/silueta.png" alt="">
														</div>
														<div class="col-md-9">
															<div class="form-group">
																<label class="col-md-4  control-label">CÓDIGO PT</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-pencil"></i></span>
																		<input id="codptoperador" name="ptcodoperador"
																		       class="form-control" type="text">
																		<input id="codoperador" name="codoperador"
																		       type="text"
																		       style="visibility: hidden"
																		       hidden="hidden">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">CÓDIGO PM</label>
																<div class="col-md-8 col-xs-12">
																	<p id="idoperador" class="form-control"
																	   style="background-color: #EEEEEE"></p>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">OPERADOR</label>
																<div class="col-md-8 col-xs-12">
																	<p id="nombreoperador" class="form-control"
																	   style="background-color: #EEEEEE"></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS DEL SERVICIO</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="col-md-4  control-label">UNIDAD</label>
																	<div class="col-md-8 col-xs-12">
																		<div class="input-group">
																			<span class="input-group-addon"><i
																						class="fa fa-car"></i></span>
																			<input id="bus" name="bus" type="text"
																			       class="form-control">
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="col-md-4  control-label">PLACA</label>
																	<div class="col-md-8 col-xs-12">
																		<p id="placa" class="form-control"
																		   style="background-color: #EEEEEE">NO
																			EXISTE</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="col-md-4  control-label">SERVICIO</label>
																	<div class="col-md-8 col-xs-12">
																		<div class="input-group">
																			<span class="input-group-addon"><i
																						class="fa fa-road"></i></span>
																			<Input id="servicio" name="servicio"
																			       type="text"
																			       class="form-control">
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="col-md-4  control-label">RUTA</label>
																	<div class="col-md-8 col-xs-12">
																		<p id="ruta" class="form-control"
																		   style="background-color: #EEEEEE">NO
																			EXISTE</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS ESPECIFICOS</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">LUGAR</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-home"></i></span>
																		<input id="lugar" name="lugar"
																		       class="form-control" type="text">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">HORA</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-time"></i></span>
																		<input id="hora" name="hora"
																		       class="form-control"
																		       value=""
																		       type="time">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">DAÑO A LA
																	UNIDAD</label>
																<div class="col-md-8 col-xs-12">
																	<select id="detalle2" name="detalle2"
																	        class="form-control select">
																		@foreach($detalles as $detalle)
																			<option value="{{$detalle->IdTipoNovedadDet}}">
																				{{$detalle->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">SENTIDO</label>
																<div class="col-md-8 col-xs-12">
																	<select id="sentido" name="sentido"
																	        class="form-control select">
																		<option value="">-</option>
																		@foreach($sentidos as $sentido)
																			<option value="{{$sentido->IdTipoData}}-{{$sentido->IdCodigoData}}">
																				{{$sentido->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">INFORMA</label>
																<div class="col-md-8 col-xs-12">
																	<select id="informante" name="informante"
																	        class="form-control select">
																		<option value="">-</option>
																		@foreach($informantes as $informante)
																			<option value="{{$informante->IdTipoData}}-{{$informante->IdCodigoData}}">
																				{{$informante->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--Final del ROW-->

										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">PERSONAL COP</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">TÉCNICO DE
																	CONTROL</label>
																<div class="col-md-8 col-xs-12">
																	<select id="tecnico" name="tecnico"
																	        class="form-control select">
																		<option value="">-</option>
																		@foreach($tecnicos as $tecnico)
																			<option value="{{$tecnico->IdEmpleado}}">
																				{{$tecnico->Nombre}} {{$tecnico->ApellidoPaterno}} {{$tecnico->ApellidoMaterno}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">SUPERVISOR</label>
																<div class="col-md-8 col-xs-12">
																	<select id="supervisor" name="supervisor"
																	        class="form-control select">
																		<option value="">-</option>
																		@foreach($supervisores as $supervisor)
																			<option value="{{$supervisor->IdEmpleado}}">
																				{{$supervisor->Nombre}} {{$supervisor->ApellidoPaterno}} {{$supervisor->ApellidoMaterno}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="step-pane sample-pane alert" data-step="2">
									<h3><strong>Paso 2 </strong> - Datos de Tercero</h3>
									<fieldset>
										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS DEL USUARIO</div>
													<div class="panel-body">
														<div class="form-group">
															<label class="col-md-4  control-label">USUARIO</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="glyphicon glyphicon-user"></i></span>
																	<input id="usuario" name="usuario"
																	       class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">DNI</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="glyphicon glyphicon-credit-card"></i></span>
																	<input id="dni" name="dni" class="form-control"
																	       type="number">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">TELÉFONO</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="glyphicon glyphicon-earphone"></i></span>
																	<input id="telefono" name="telefono"
																	       class="form-control" type="number">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">DIRECCIÓN</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="glyphicon glyphicon-home"></i></span>
																	<input id="direccion" name="direccion"
																	       class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">DISTRITO</label>
															<div class="col-md-8 col-xs-12">
																<select id="distrito" name="distrito"
																        class="form-control select">
																	@foreach($distritos as $distrito)
																		<option value="{{$distrito->IdProvincia}}-{{$distrito->IdDepartamento}}">{{$distrito->Descripcion}}</option>
																	@endforeach
																</select>
															</div>
														</div>
													</div>
													<!--Final del panelbody-->
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS DE LA UNIDAD DE TERCERO</div>
													<div class="panel-body">
														<div class="form-group">
															<label class="col-md-4  control-label">CONDUCTOR</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-user"></i></span>
																	<input id="conductor" name="conductor"
																	       class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">LICENCIA</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="glyphicon glyphicon-credit-card"></i></span>
																	<input id="licencia" name="licencia"
																	       class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">PLACA DEL
																AUTOMÓVIL</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-car"></i></span>
																	<input id="placatercero" name="placatercero"
																	       class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">MARCA/COLOR</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-paint-brush"></i></span>
																	<input id="marca" name="marca" class="form-control"
																	       type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4  control-label">DIRECCIÓN</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="glyphicon glyphicon-home"></i></span>
																	<input id="direccion" name="direccion"
																	       class="form-control" type="text">
																</div>
															</div>
														</div>
													</div>
													<!--Final del panelbody-->
												</div>
											</div>
										</div>
										<!--Final del RoW-->

										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DESCRIPCION DEL HECHO</div>
													<div class="panel-body">
														<!--<section>
																<textarea class="form-control"  rows="4" name="descripcion" id="descripcion"></textarea>
														</section>-->
														<section>
															<label class="label"></label>
															<div class="textarea">
																<textarea class="form-control" rows="3"
																          name="descripcion" id="descripcion">
																</textarea>
															</div>
														</section>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">PROCEDIMIENTO</div>
													<div class="panel-body">
														<section>
															<textarea class="form-control" rows="4" name="procedimiento"
															          id="procedimiento"></textarea>
														</section>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">LUGARES DE ATENCIÓN</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">COMISARÍA</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-home"></i></span>
																		<input id="comisaria" name="comisaria"
																		       class="form-control" type="text">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">ASEGURADORA</label>
																<div class="col-md-8 col-xs-12">
																	<select id="aseguradora" name="aseguradora"
																	        class="form-control select">
																		@foreach($aseguradoras as $aseguradora)
																			<option value="{{$aseguradora->IdTipoData}}-{{$aseguradora->IdCodigoData}}">
																				{{$aseguradora->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">NOMBRE
																	PROCURADOR</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-user"></i></span>
																		<input id="precurador" name="precurador"
																		       class="form-control" type="text">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">CLÍNICA U
																	HOSPITAL</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="fa fa-ambulance"></i></span>
																		<input id="clinica" name="clinica"
																		       class="form-control" type="text">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">Nº DE
																	SINIESTRO</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="fa fa-sort-numeric-asc"></i></span>
																		<input id="siniestro" name="siniestro"
																		       class="form-control" type="number">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">KILOMETRAJE PERDIDO</div>
													<div class="panel-body">
														<input id="kilometraje"
														       name="kilometraje"
														       class="form-control"
														       style="border-radius: 10px !important;"
														       type="text">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">DAÑO DEL BUS O DIAGNÓSTICO</div>
													<div class="panel-body">
														<input id="descdanio"
														       name="desdanio"
														       class="form-control"
														       style="border-radius: 10px !important;"
														       type="text">
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="step-pane sample-pane alert" data-step="3">
									<h3><strong>Paso 3 </strong> - Cierre</h3>
									<fieldset>
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS GENERALES</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">Nº DE
																	INFORME</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																			<span class="input-group-addon"><i
																						class="fa fa-sort-numeric-asc"></i></span>
																		<input id="ninforme" name="ninforme"
																		       type="number"
																		       min="0" class="form-control">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">ACCIÓN
																	DISCIPLINARIA</label>
																<div class="col-md-8 col-xs-12">
																	<select id="acciones" name="acciones"
																	        class="form-control select">
																		<option value="0">NO APLICA</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">RESPONSABLE</label>
																<div class="col-md-8 col-xs-12">
																	<select id="bolresponsable" name="bolresponsable"
																	        class="form-control select">
																		<option value="2">En proceso</option>
																		<option value="0">SÍ</option>
																		<option value="1">NO</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">GASTO EFECTUADO</div>
													<div class="panel-body">
														<div class="form-group">
															<label class="col-md-4 control-label">MONTO DEL DAÑO</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																			<span class="input-group-addon"><i
																						class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montodaño" name="montodaño" type="number"
																	       step=".01" value="0" min="0"
																	       class="form-control">
																</div>

															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 control-label">DOSAJE Y
																PERITAJE</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																			<span class="input-group-addon"><i
																						class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montodosaje" name="montodosaje"
																	       type="number"
																	       step=".01" value="0" class="form-control">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 control-label">MONTO TOTAL</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montototal" name="montototal"
																	       type="number"
																	       value="0" class="form-control" disabled>
																</div>
															</div>
														</div>
														<hr>
														<div class="form-group">
															<label class="col-md-4 control-label">ESCALA DEL
																MONTO</label>
															<div class="col-md-8 col-xs-12">
																<input id="escala" name="escala" value="5" type="text"
																       style="visibility: hidden; " hidden>
																<p id="escaladesc" class="form-control"
																   style="background-color: #EEEEEE">EN PROCESO</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">MONTO RECUPERADO</div>
													<div class="panel-body">
														<div class="form-group">
															<label class="col-md-4 control-label">MONTO
																CONCILIADO</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montoconciliado" name="montoconciliado"
																	       type="number" step=".01" value="0"
																	       class="form-control">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 control-label">ACTIVACIÓN DE
																POLIZA</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montopoliza" name="montopoliza"
																	       type="number"
																	       value="0" step=".01" class="form-control">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 control-label">DESCUENTO DE
																OPERADOR</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montodesc" name="montodesc" type="number"
																	       value="0" step=".01" class="form-control">
																</div>
															</div>
														</div>
														<hr>
														<div class="form-group">
															<label class="col-md-4 control-label">MONTO TOTAL</label>
															<div class="col-md-8 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-sort-numeric-asc"></i></span>
																	<input id="montorecuperado" name="montorecuperado"
																	       type="number" value="0" class="form-control"
																	       disabled>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--Final del RoW-->
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS GENERALES</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">ORIGEN DE LA
																	NOVEDAD</label>
																<div class="col-md-8 col-xs-12">
																	<select id="origen" name="origen"
																	        class="form-control select">
																		@foreach($origenes as $origen)
																			<option value="{{$origen->IdTipoData}}-{{$origen->IdCodigoData}}">
																				{{$origen->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">CONSECUENCIA DE
																	LA OCURRENCIA</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="fa fa-comment-o"></i></span>
																		<input id="conocurrencia" name="conocurrencia"
																		       type="text" class="form-control">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4  control-label">FECHA DE
																	CIERRE</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="fa fa-calendar"></i></span>
																		<input class="form-control datepicker"
																		       id="fcierre" name="fcierre"
																		       value="{{date('Y-m-d')}}" type="date">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">CONCLUSIONES Y
																	ACTUADOS</label>
																<div class="col-md-8 col-xs-12">
																	<select id="conclusiones" name="conclusiones"
																	        class="form-control select">
																		@foreach($concluactuados as $concluactuado)
																			<option value="{{$concluactuado->IdAccidentalidad}}">{{$concluactuado->Descripcion}}</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- widget div-->
			</div>
			<!-- end widget -->
		</article>
		<!-- WIDGET END -->
	</div>
	<!-- end row -->
</section>
<!-- end widget grid -->

<script type="text/javascript">
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

    pageSetUp();

    // PAGE RELATED SCRIPTS

    // pagefunction

    var pagefunction = function () {

// IMPORTANT: You must call .steps() before calling .formValidation()


        $("#button").click(function () {
            var cadena = $("#danioform").serialize();
            $.post("/operaciones/registro", cadena)
                .done(function (data) {
                    $("#respuesta").html(data);
                })
        });
        $("#tiponovedad").change(function () {
            var1 = $(this).val();
            $.post("/operaciones/especificacion", {tiponovedad: var1})
                .done(function (data) {
                    $("#especificacion").html(data);
                    $.post("/operaciones/detalle", {especificacion: $("#especificacion").val()})
                        .done(function (data) {
                            $("#detalle").html(data);
                            $("#detalle2").html(data);
                        });
                });
            $.post("/operaciones/detalle", {especificacion: $("#especificacion").val()})
                .done(function (data) {
                    $("#detalle").html(data);
                    $("#detalle2").html(data);
                });
        });
        $("#especificacion").change(function () {
            $.post("/operaciones/detalle", {especificacion: $(this).val()})
                .done(function (data) {
                    $("#detalle").html(data)
                    $("#detalle2").html(data);
                });
        });
        $("#detalle").change(function () {
            $("#detalle2").val($(this).val());
        });
        $("#detalle2").change(function () {
            $("#detalle").val($(this).val());
        });
        $("#bus").keyup(function () {
            $.post("/operaciones/placa", {bus: $(this).val()})
                .done(function (data) {
                    $("#placa").html(data);
                });
        });
        $("#servicio").keyup(function () {
            $.post("/operaciones/ruta", {servicio: $(this).val()})
                .done(function (data) {
                    $("#ruta").html(data);
                });
        });
        $("#codptoperador").keyup(function () {
            $.post("/operaciones/nombreoperador", {codoperador: $(this).val()})
                .done(function (data) {
                    $("#nombreoperador").html(data);
                });
            $.post("/operaciones/idoperador", {codoperador: $(this).val()})
                .done(function (data) {
                    $("#idoperador").html(data);
                    $("#codoperador").val(data);
                    if ($.isNumeric(data)) {
                        $("#imgdiv").html('<img class="img-responsive" src="img/fotosempleados/' + data + '.jpg" alt="">');
                    } else {
                        $("#imgdiv").html('<img class="img-responsive" src="img/fotosempleados/silueta.png" alt="">');
                    }
                });

        });
        $("#montodaño").change(function () {
            res = Number($("#montodaño").val()) + Number($("#montodosaje").val());
            $("#montototal").val(res.toFixed(2));
            nresp = Number($("#bolresponsable").val());
            if (nresp == 0) {
                if (Number($("#montototal").val()) < 120) {
                    $("#escala").val(2);
                    $("#escaladesc").html("LEVE");
                } else if (Number($("#montototal").val()) < 500) {
                    $("#escala").val(3);
                    $("#escaladesc").html("GRAVE");
                } else {
                    $("#escala").val(4);
                    $("#escaladesc").html("MUY GRAVE");
                }
            }
        });
        $("#montodosaje").change(function () {
            res = Number($("#montodaño").val()) + Number($("#montodosaje").val());
            $("#montototal").val(res.toFixed(2));
            nresp = Number($("#bolresponsable").val());
            if (nresp == 0) {
                if (Number($("#montototal").val()) < 120) {
                    $("#escala").val(2);
                    $("#escaladesc").html("LEVE");
                } else if (Number($("#montototal").val()) < 500) {
                    $("#escala").val(3);
                    $("#escaladesc").html("GRAVE");
                } else {
                    $("#escala").val(4);
                    $("#escaladesc").html("MUY GRAVE");
                }
            }
        });
        $("#montoconciliado").change(function () {
            res = Number($("#montopoliza").val()) + Number($("#montodesc").val()) + Number($("#montoconciliado").val());
            $("#montorecuperado").val(res.toFixed(2));
        });
        $("#montodesc").change(function () {
            res = Number($("#montopoliza").val()) + Number($("#montodesc").val()) + Number($("#montoconciliado").val());
            $("#montorecuperado").val(res.toFixed(2));
        });
        $("#montopoliza").change(function () {
            res = Number($("#montopoliza").val()) + Number($("#montodesc").val()) + Number($("#montoconciliado").val());
            $("#montorecuperado").val(res.toFixed(2));
        });
        $("#bolresponsable").change(function () {
            nresp = Number($("#bolresponsable").val());
            if (nresp == 0) {
                $.post("/operaciones/accionesd")
                    .done(function (data) {
                        $("#acciones").html(data);
                    });
            } else if (nresp == 1) {
                $("#acciones").html('<option value="0">NO APLICA</option>');
                $("#escala").val(1);
                $("#escaladesc").html("EXONERADO");
                console.log($("#escala").val());
            } else if (nresp == 2) {
                $("#acciones").html('<option value="0">NO APLICA</option>');
                $("#escala").val(5);
                console.log($("#escala").val());
                $("#escaladesc").html("EN PROCESO");
            }
        });
    };
    // end pagefunction

    // Load bootstrap wizard dependency then run pagefunction
    pagefunction();
    $(document).ready(function () {
        $('#danioform').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            // This option will not ignore invisible fields which belong to inactive panels
            excluded: ':disabled',
            fields: {
                quantity: {
                    validators: {
                        notEmpty: {
                            message: 'The quantity is required'
                        },
                        greaterThan: {
                            value: 1,
                            message: 'The quantity must be greater than 0'
                        },
                        integer: {
                            message: 'The quantity must be a number'
                        }
                    }
                },
                'size[]': {
                    validators: {
                        notEmpty: {
                            message: 'The size is required'
                        }
                    }
                },
                'input[]': {
                    validators: {
                        notEmpty: {
                            message: 'The color is required'
                        }
                    }
                },
                hora: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                }, ninforme: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                acciones: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                bolresponsable: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                montodaño: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                montodosaje: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                escala: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                montoconciliado: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                montopoliza: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                montodesc: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                origen: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                conocurrencia: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                fcierre: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                conclusiones: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                descripcion: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                tiponovedad: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                especificacion: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                procedimiento: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                fecha: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                lugar: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                codoperador: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }, /*
	                     stringLength: {
	                     message: 'Este campo debe tener solo 6 digitos',
	                     max: function (value, validator, $field) {
	                     return 6 - (value.match(/\r/g) || []).length;
	                     },
	                     min: function (value, validator, $field) {
	                     return 6 - (value.match(/\r/g) || []).length;
	                     }
	                     },*/
                        integer: {
                            message: 'Este campo es un entero'
                        },
                        greaterThan: {
                            value: 1,
                            message: 'El valor debe ser positivo'
                        }
                    }
                },
                bus: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        stringLength: {
                            message: 'Este campo debe tener solo 5 digitos',
                            max: function (value, validator, $field) {
                                return 5 - (value.match(/\r/g) || []).length;
                            },
                            min: function (value, validator, $field) {
                                return 5 - (value.match(/\r/g) || []).length;
                            }
                        },
                        integer: {
                            message: 'Este campo es un entero'
                        },
                        greaterThan: {
                            value: 1,
                            message: 'El valor debe ser positivo'
                        }
                    }
                },
                dni: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        stringLength: {
                            message: 'Este campo debe tener solo 8 digitos',
                            max: function (value, validator, $field) {
                                return 8 - (value.match(/\r/g) || []).length;
                            },
                            min: function (value, validator, $field) {
                                return 8 - (value.match(/\r/g) || []).length;
                            }
                        },
                        greaterThan: {
                            value: 1,
                            message: 'El valor debe ser positivo'
                        }
                        ,
                        integer: {
                            message: 'Este campo es un entero'
                        },
                    }
                },
                servicio: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        stringLength: {
                            message: 'Este campo debe tener solo 4 digitos',
                            max: function (value, validator, $field) {
                                return 4 - (value.match(/\r/g) || []).length;
                            },
                            min: function (value, validator, $field) {
                                return 4 - (value.match(/\r/g) || []).length;
                            }
                        },
                        greaterThan: {
                            value: 1,
                            message: 'El valor debe ser positivo'
                        },
                        integer: {
                            message: 'Este campo es un entero'
                        },
                    }
                },
                usuario: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'El usuario consiste solo de letras alfabeticas'
                        }
                    }
                },
                sentido: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                informante: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                conductor: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'El usuario consiste solo de letras alfabeticas'
                        }
                    }
                },
                telefono: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                direccion: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                distrito: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                placatercero: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                clinica: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                precurador: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'El usuario consiste solo de letras alfabeticas'
                        }
                    }
                },
                tecnico: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                supervisor: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                aseguradora: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                comisaria: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                desdanio: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                kilometraje: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        },
                        integer: {
                            message: 'Este campo es un enteror',
                        }
                    }
                },
                licencia: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                siniestro: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                marca: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                }
            }
        });

        $('#myWizard')
        // Call the wizard plugin
            .wizard()

            // Triggered when clicking the Next/Prev buttons
            .on('actionclicked.fu.wizard', function (e, data) {
                var fv = $('#danioform').data('formValidation'), // FormValidation instance
                    step = data.step,                              // Current step
                    // The current step container
                    $container = $('#danioform').find('.step-pane[data-step="' + step + '"]');

                // Validate the container
                fv.validateContainer($container);

                var isValidStep = fv.isValidContainer($container);
                if (isValidStep === false || isValidStep === null) {
                    // Do not jump to the target panel
                    e.preventDefault();
                }
            })

            // Triggered when clicking the Complete button
            .on('finished.fu.wizard', function (e) {
                var fv = $('#danioform').data('formValidation'),
                    step = $('#myWizard').wizard('selectedItem').step,
                    $container = $('#danioform').find('.step-pane[data-step="' + step + '"]');

                // Validate the last step container
                fv.validateContainer($container);

                var isValidStep = fv.isValidContainer($container);
                if (isValidStep === true) {
                    // Uncomment the following line to submit the form using the defaultSubmit() method
                    // fv.defaultSubmit();

                    // For testing purpose
                    var cadena = $("#danioform").serialize();
                    console.log(cadena);
                    $.post("/operaciones/danioscierre/registrar", cadena)
                        .done(function (data) {
                        	alert('Registro grabado exitosamente!');
                            window.location = "/home";
                            console.log('se envio');
                        })
                }
            });
    });
</script>