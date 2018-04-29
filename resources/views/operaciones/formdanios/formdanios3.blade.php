<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><span><i class="fa fa-pencil-square-o fa-fw "></i> Novedades</span></h1>
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
					<h2>Novedad por daños materiales o lesiones</h2>
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
								<button type="button" class="btn btn-sm btn-primary btn-prev active">
									<i class="fa fa-arrow-left"></i>Ant
								</button>
								<button id="butenviar" form="danioform" type="submit" class="btn btn-sm btn-success btn-next" data-last="Enviar">
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
																<label class="col-md-4 col-xs-9 control-label">TIPO NOVEDAD</label>
																<div class="col-md-6 col-xs-12">
																	<select id="tiponovedad" name="tiponovedad" class="form-control select">
																		@foreach($tiponovedades as $tiponovedad)
																			<option value="{{$tiponovedad->IdTipoData}}-{{$tiponovedad->IdCodigoData}}">
																				{{$tiponovedad->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 col-xs-9 control-label">ESPECIFICACION</label>
																<div class="col-md-6 col-xs-12">
																	<select id="especificacion" name="especificacion" class="form-control select">
																		@foreach($especificaciones as $especificacion)
																			<option value="{{$especificacion->IdTipoNovedad}}">
																				{{$especificacion->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 col-xs-9 control-label">FECHA</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

																		<input type="text" name="fecha" id="fecha" placeholder="Expected start date">
																	</div>
																	<span class="help-block">Selecccione una opcion</span>
																</div>
															</div>
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">DETALLE</label>
																<div class="col-md-6 col-xs-12">
																	<select id="detalle" name="detalle" class="form-control select">
																		@foreach($detalles as $detalle)
																			<option value="{{$detalle->IdTipoNovedadDet}}">
																				{{$detalle->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
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
														<br>
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">COD. PROT</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
																	<input id="codoperador" name="codoperador" class="form-control" data-mask-placeholder= "X" data-mask="999999" id="codprot" name="codprot"type="text">
																</div>
															</div>
														</div>
														<br>
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">Codigo PM</label>
															<div class="col-md-6 col-xs-12">
																<p id="idoperador" class="form-control"></p>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">Operador</label>
															<div class="col-md-6 col-xs-12">
																<p id="nombreoperador" class="form-control"></p>
															</div>
															<br>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS DEL SERVICIO</div>
													<div class="panel-body">
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">Unidad</label>
															<div class="col-md-6 col-xs-12">
																<Input id="bus" name="bus" type="text" data-mask-placeholder= "X" data-mask="99999" class="form-control">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">Placa</label>
															<div class="col-md-6 col-xs-12">
																<p id="placa" class="form-control">nro placa</p>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">Servicio</label>
															<div class="col-md-6 col-xs-12">
																<Input id="servicio" name="servicio" type="text" data-mask-placeholder= "X" data-mask="9999"class="form-control">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-4 col-xs-9 control-label">Ruta</label>
															<div class="col-md-6 col-xs-12">
																<p id="ruta" class="form-control">nro rutaa</p>
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
														<div class="col-md-5 col-md-offset-1">
															<div class="form-group">
																<label class="col-md-4 col-xs-9 control-label">Lugar</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
																		<input id="lugar" name="lugar" class="form-control" type="text">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 col-xs-9 control-label">Hora</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
																		<input id="hora" name="hora" class="form-control" type="time">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Daño a la unidad</label>
																<div class="col-md-6 col-xs-12">
																	<select id="detalle2" name="detalle2" class="form-control select">
																		@foreach($detalles as $detalle)
																			<option value="{{$detalle->IdTipoNovedadDet}}">
																				{{$detalle->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Sentido</label>
																<div class="col-md-6 col-xs-12">
																	<select id="sentido" name="sentido" class="form-control select">
																		@foreach($sentidos as $sentido)
																			<option value="{{$sentido->IdTipoData}}-{{$sentido->IdCodigoData}}">
																				{{$sentido->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
																</div>
															</div>
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Forma</label>
																<div class="col-md-6 col-xs-12">
																	<select id="informante" name="informante" class="form-control select">
																		@foreach($informantes as $informante)
																			<option value="{{$informante->IdTipoData}}-{{$informante->IdCodigoData}}">
																				{{$informante->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
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
														<div class="col-md-5 col-md-offset-1">
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Tec de control</label>
																<div class="col-md-6 col-xs-12">
																	<select id="tecnico" name="tecnico" class="form-control select">
																		@foreach($tecnicos as $tecnico)
																			<option value="{{$tecnico->IdEmpleado}}">
																				{{$tecnico->Nombre}} {{$tecnico->ApellidoPaterno}} {{$tecnico->ApellidoMaterno}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Supervisor</label>
																<div class="col-md-6 col-xs-12">
																	<select id="supervisor" name="supervisor" class="form-control select">
																		@foreach($supervisores as $supervisor)
																			<option value="{{$supervisor->IdEmpleado}}">
																				{{$supervisor->Nombre}} {{$supervisor->ApellidoPaterno}} {{$supervisor->ApellidoMaterno}}
																			</option>
																		@endforeach
																	</select>
																	<span class="help-block">Selecccione una opcion</span>
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
									<h3><strong>Paso 2 </strong> - Datos Principales</h3>
									<fieldset>
										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">Datos del usuario</div>
													<div class="panel-body">
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Usuario</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																	<input id="usuario" name="usuario" class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Dni</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
																	<input id="dni" name="dni" class="form-control" type="number">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Telefono</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
																	<input id="telefono" name="telefono" class="form-control" type="number">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Direccion</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
																	<input id="direccion" name="direccion" class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Distrito</label>
															<div class="col-md-6 col-xs-12">
																<select id="distrito" name="distrito" class="form-control select">
																	<option value="0">Golpe</option>
																	<option value="1">Choque</option>
																	<option value="2">Rayadura</option>
																</select>
															</div>
														</div>
													</div>
													<!--Final del panelbody-->
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">Datos de la unidad de terceros</div>
													<div class="panel-body">
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Conductor</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-user"></i></span>
																	<input id="conductor" name="conductor" class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Licencia</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
																	<input id="licencia" name="licencia" class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Placa del automovil</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-car"></i></span>
																	<input id="placatercero" name="placatercero" class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Marca/Color</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-paint-brush"></i></span>
																	<input id="marca" name="marca" class="form-control" type="text">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  class="col-md-4 col-xs-9 control-label">Direccion</label>
															<div class="col-md-6 col-xs-12">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
																	<input id="direccion" name="direccion" class="form-control" type="text">
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
														<section>
															<label class="label">Message</label>
															<label class="textarea">
																<!--<i class="icon-append fa fa-comment"></i>-->
																<textarea rows="4" name="descripcion" id="descripcion"></textarea>
															</label>
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
															<label class="label">Message</label>


															<label class="textarea">
																<!--<i class="icon-append fa fa-comment"></i>-->
																<textarea class="form-control" rows="4" name="procedimiento" id="procedimiento"></textarea>

															</label>
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
																<label  class="col-md-4 col-xs-9 control-label">Comisaria</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
																		<input id="comisaria" name="comisaria" class="form-control" type="text">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Aseguradora</label>
																<div class="col-md-6 col-xs-12">
																	<select id="aseguradora" name="aseguradora" class="form-control select">
																		@foreach($aseguradoras as $aseguradora)
																			<option value="{{$aseguradora->IdTipoData}}-{{$aseguradora->IdCodigoData}}">
																				{{$aseguradora->Descripcion}}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Nombre precurador</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																		<input id="precurador" name="precurador" class="form-control" type="text">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Clinica u Hospital</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
																		<input id="clinica" name="clinica" class="form-control" type="text">
																	</div>
																</div>
															</div>
															<br>
															<div class="form-group">
																<label  class="col-md-4 col-xs-9 control-label">Numero de Siniestro</label>
																<div class="col-md-6 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
																		<input id="siniestro" name="siniestro" class="form-control" type="number">
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
													<div class="panel-heading">Kilometraje Perdido</div>
													<div class="panel-body">
														<input id="kilometraje" name="kilometraje" class="form-control" type="number">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">Daño del bus o diagnostico</div>
													<div class="panel-body">
														<input id="descdanio" name="desdanio" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
										<p id="button">Enviar</p>
										<div id="respuesta">
											asdad
										</div>
									</fieldset>
								</div>

								<div class="step-pane sample-pane alert" data-step="3">
									<h3><strong>Paso 3 </strong> - Terminaste!</h3>
									<br>
									<br>
									<h1 class="text-center text-success"><i class="fa fa-check"></i> Felicidades!
										<br>
										<small>Click para enviar los datos</small></h1>
									<br>
									<br>
									<br>
									<br>
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
    var pagefunction = function() {
// IMPORTANT: You must call .steps() before calling .formValidation()
        //Son mis validaciones
        loadScript("js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js");
        loadScript("js/plugin/fuelux/wizard/wizard.min.js", fueluxWizard);
        var errorClass = 'invalid';
        var errorElement = 'em';
		$("#butenviar").click(function () {
            var $danioform = $('#danioform').validate({
                errorClass		: errorClass,
                errorElement	: errorElement,
                highlight: function(element) {
                    $(element).parent().removeClass('state-success').addClass("state-error");
                    $(element).removeClass('valid');
                    console.log($(element))
                },
                unhighlight: function(element) {
                    $(element).parent().removeClass("state-error").addClass('state-success');
                    $(element).addClass('valid');
                    console.log($(element))

                },

                // Rules for form validation
                rules : {
                    tiponovedad:{
                        required : true
                    },
                    especificacion:{
                        required : true
                    },
                    fecha:{
                        required : true
                    },
                    detalle:{
                        required : true
                    },
                    codoperador:{
                        required : true
                    },
                    bus:{
                        required : true
                    },
                    servicio:{
                        required : true
                    },
                    lugar:{
                        required : true
                    },
                    hora:{
                        required : true
                    },
                    detalle2:{
                        required : true
                    },
                    sentido:{
                        required : true
                    },
                    informante:{
                        required : true
                    },
                    tecnico:{
                        required : true
                    },
                    supervisor:{
                        required : true
                    },
                    usuario:{
                        required : true
                    },
                    dni:{
                        required : true
                    },
                    telefono:{
                        required : true
                    },
                    direccion:{
                        required : true
                    },
                    distrito:{
                        required : true
                    },
                    conductor:{
                        required : true
                    },
                    licencia:{
                        required : true
                    },
                    placatercero:{
                        required : true
                    },
                    marca:{
                        required : true
                    },
                    descripcion:{
                        required : true
                    },
                    procedimiento:{
                        required : true
                    },
                    comisaria:{
                        required : true
                    },
                    aseguradora:{
                        required : true
                    },
                    precurador:{
                        required : true
                    },
                    clinica:{
                        required : true
                    },
                    siniestro:{
                        required : true
                    },
                    kilometraje:{
                        required : true,
                        digits : true
                    },
                    desdanio:{
                        required : true
                    }
                },

                // Messages for form validation
                messages : {
                    tiponovedad:{
                        required : 'Ingrese el campo'
                    },
                    especificacion:{
                        required : 'Ingrese el campo'
                    },
                    fecha:{
                        required : 'Ingrese el campo'
                    },
                    detalle:{
                        required : 'Ingrese el campo'
                    },
                    codoperador:{
                        required : 'Ingrese el campo'
                    },
                    bus:{
                        required : 'Ingrese el campo'
                    },
                    servicio:{
                        required : 'Ingrese el campo'
                    },
                    lugar:{
                        required : 'Ingrese el campo'
                    },
                    hora:{
                        required : 'Ingrese el campo'
                    },
                    detalle2:{
                        required : 'Ingrese el campo'
                    },
                    sentido:{
                        required : 'Ingrese el campo'
                    },
                    informante:{
                        required : 'Ingrese el campo'
                    },
                    tecnico:{
                        required : 'Ingrese el campo'
                    },
                    supervisor:{
                        required : 'Ingrese el campo'
                    },
                    usuario:{
                        required : 'Ingrese el campo'
                    },
                    dni:{
                        required : 'Ingrese el campo'
                    },
                    telefono:{
                        required : 'Ingrese el campo'
                    },
                    direccion:{
                        required : 'Ingrese el campo'
                    },
                    distrito:{
                        required : 'Ingrese el campo'
                    },
                    conductor:{
                        required : 'Ingrese el campo'
                    },
                    licencia:{
                        required : 'Ingrese el campo'
                    },
                    placatercero:{
                        required : 'Ingrese el campo'
                    },
                    marca:{
                        required : 'Ingrese el campo'
                    },
                    descripcion:{
                        required : 'Ingrese el campo'
                    },
                    procedimiento:{
                        required : 'Ingrese el campo'
                    },
                    comisaria:{
                        required : 'Ingrese el campo'
                    },
                    aseguradora:{
                        required : 'Ingrese el campo'
                    },
                    precurador:{
                        required : 'Ingrese el campo'
                    },
                    clinica:{
                        required : 'Ingrese el campo'
                    },
                    siniestro:{
                        required : 'Ingrese el campo'
                    },
                    kilometraje:{
                        required : 'Ingrese el campo'
                    },
                    desdanio:{
                        required : 'Ingrese el campo'
                    },
                },

                // Do not change code below
                errorPlacement : function(error, element) {
                    error.insertAfter(element.parent());
                }
            });
        });
        function fueluxWizard() {
/*            var wizard = $('#danioform').wizard();
            wizard.on('finished', function(e, data) {
                $("#fuelux-wizard").submit();
                console.log("submitted!");
                $.smallBox({
                    title : "Congratulations! Your form was submitted",
                    content : "<i class='fa fa-clock-o'></i><i>1 seconds ago...</i>",
                    color : "#5F895F",
                    iconSmall : "fa fa-check bounce animated",
                    timeout : 4000
                });
            });*/
            var wizard = $('#danioform').wizard();
            wizard.on('actionclicked.fu.wizard', function(e, data) {
                if (data.direction === 'next') {
                    return;
                }
            })
                .on('finished.fu.wizard', function(e) {
                    console.log('finished');
                });
        }
        // START AND FINISH DATE
        $('#fecha').datepicker({
            dateFormat : 'dd.mm.yy',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
        });
        $("#button").click(function(){
            var cadena = $("#danioform").serialize();
            $.post( "/operaciones/registro", cadena)
                .done(function( data ) {
                    $("#respuesta").html(data);
                })
        });
        $("#tiponovedad").change(function () {
            var1 = $(this).val();
            $.post( "/operaciones/especificacion", { tiponovedad: var1})
                .done(function( data ) {
                    $("#especificacion").html(data);
                    $.post( "/operaciones/detalle", { especificacion: $("#especificacion").val()})
                        .done(function( data ) {
                            $("#detalle").html(data);
                            $("#detalle2").html(data);
                        });
                });
            $.post( "/operaciones/detalle", { especificacion: $("#especificacion").val()})
                .done(function( data ) {
                    $("#detalle").html(data);
                    $("#detalle2").html(data);
                });
        });
        $("#especificacion").change(function () {
            $.post( "/operaciones/detalle", { especificacion: $(this).val()})
                .done(function( data ) {
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
        $("#bus").keyup(function() {
            $.post( "/operaciones/placa", { bus: $(this).val()})
                .done(function( data ) {
                    $("#placa").html(data);
                });
        });
        $("#servicio").keyup(function() {
            $.post( "/operaciones/ruta", { servicio: $(this).val()})
                .done(function( data ) {
                    $("#ruta").html(data);
                });
        });
        $("#codoperador").keyup(function() {
            $.post( "/operaciones/nombreoperador", { codoperador: $(this).val()})
                .done(function( data ) {
                    $("#nombreoperador").html(data);
                });
            $.post( "/operaciones/idoperador", { codoperador: $(this).val()})
                .done(function( data ) {
                    $("#idoperador").html(data);

                });

        });
    };
    // end pagefunction
    // Load bootstrap wizard dependency then run pagefunction
    pagefunction();
</script>
