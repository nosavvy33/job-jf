<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-pencil-square-o fa-fw "></i>OPERACIONES
		</h1>
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
					<h2>Novedad por operador</h2>
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
								</ul>
							</div>
							<div class="actions">
								<button type="button" class="btn btn-sm btn-primary btn-prev active">
									<i class="fa fa-arrow-left"></i>Ant
								</button>
								<button type="button" class="btn btn-sm btn-success btn-next" data-last="Guardar">
									Sig<i class="fa fa-arrow-right"></i>
								</button>
							</div>
						</div>
						<div style="clear:both;"></div>
						<div class="step-content">
							<form class="form-horizontal" id="novedadform">
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
																<label class="col-md-4 control-label">TIPO
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
																<label class="col-md-4 control-label">ESPECIFICACION</label>
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
																		<input class="form-control"
																		       id="fecha" name="fecha"
																		       value="{{date('Y-m-d')}}"
																		       type="date">
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
													<div class="panel-heading">DATOS DEL OPERADOR</div>
													<div class="panel-body">
														<div id="imgdiv" class="col-md-3 col-xs-12">
															<img class="img-responsive"
															     src="img/fotosempleados/silueta.png">
														</div>
														<div class="col-md-9">
															<div class="form-group">
																<label class="col-md-4 control-label">CÓDIGO PT</label>
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
																<label class="col-md-4 control-label">CÓDIGO PM</label>
																<div class="col-md-8 col-xs-12">
																	<p id="idoperador" class="form-control"
																	   style="background-color: #EEEEEE"></p>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">OPERADOR</label>
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
													<div class="panel-heading">DATOS DE REEMPLAZO</div>
													<div class="panel-body">
														<div id="imgdiv2" class="col-md-3 col-xs-12">
															<img class="img-responsive"
															     src="img/fotosempleados/silueta.png" alt="">
														</div>

														<div class="col-md-9">
															<div class="form-group">
																<label class="col-md-4 control-label">CÓDIGO PT</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-pencil"></i></span>
																		<input id="codptoperador2" name="ptcodoperador2"
																		       class="form-control" type="text">
																		<input id="codreemplazo" name="codreemplazo"
																		       type="text"
																		       style="visibility: hidden"
																		       hidden="hidden">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">CÓDIGO PM</label>
																<div class="col-md-8 col-xs-12">
																	<p id="idreemplazo" class="form-control"
																	   style="background-color: #EEEEEE"></p>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">OPERADOR</label>
																<div class="col-md-8 col-xs-12">
																	<p id="nombrereemplazo" class="form-control"
																	   style="background-color: #EEEEEE"></p>
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
													<div class="panel-heading">DATOS DEL SERVICIO</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">UNIDAD</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																			<span class="input-group-addon"><i
																						class="fa fa-car"></i></span>
																		<input id="bus" name="bus" type="text"
																		       class="form-control">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label">PLACA</label>
																<div class="col-md-8 col-xs-12">
																	<p id="placa" class="form-control"
																	   style="background-color: #EEEEEE"></p>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4 control-label">SERVICIO</label>
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
															<div class="form-group">
																<label class="col-md-4 control-label">RUTA</label>
																<div class="col-md-8 col-xs-12">
																	<p id="ruta" class="form-control"
																	   style="background-color: #EEEEEE"></p>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<hr>
															<div class="form-group">
																<label class="col-md-4 control-label">CHECKLIST</label>
																<div class="col-md-4 col-xs-12">
																	<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-sort-numeric-asc"></i></span>
																		<input id="checklist" name="checklist"
																		       type="number"
																		       class="form-control" min="0">
																	</div>
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
									<h3><strong>Paso 2 </strong> - Datos Específicos</h3>
									<fieldset>
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DATOS ESPECIFICOS</div>
													<div class="panel-body">
														<div class="col-md-12">
															<div class="col-md-12">
																<label class="col-md-3 control-label">DATOS DE
																	PRESENTACIÓN</label>
															</div>
															<div class="col-md-12">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-md-4 control-label">HORA</label>
																		<div class="col-md-8 col-xs-12">
																			<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-time"></i></span>
																				<input id="horapresentacion"
																				       name="horapresentacion"
																				       class="form-control"
																				       value="{{date('H:m')}}"
																				       type="time">
																			</div>
																		</div>
																	</div>
																</div>
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
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<hr>
															<div class="col-md-12">
																<label class="col-md-3 control-label">DATOS DEL
																	SERVICIO</label>
															</div>
															<div class="col-md-12">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-md-4  control-label">HORA</label>
																		<div class="col-md-8 col-xs-12">
																			<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-time"></i></span>
																				<input id="horaservicio"
																				       name="horaservicio"
																				       class="form-control"
																				       value="{{date('H:m')}}"
																				       type="time">
																			</div>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-md-4 control-label">LUGAR</label>
																		<div class="col-md-8 col-xs-12">
																			<div class="input-group">
																		<span class="input-group-addon"><i
																					class="glyphicon glyphicon-home"></i></span>
																				<input id="lugarservicio"
																				       name="lugarservicio"
																				       class="form-control" type="text">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-md-4  control-label">SENTIDO</label>
																		<div class="col-md-8 col-xs-12">
																			<select id="sentido" name="sentido"
																			        class="form-control select">
																				@foreach($sentidos as $sentido)
																					<option value="{{$sentido->IdTipoData}}-{{$sentido->IdCodigoData}}">
																						{{$sentido->Descripcion}}
																					</option>
																				@endforeach
																			</select>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-md-4  control-label">INFORMA</label>
																		<div class="col-md-8 col-xs-12">
																			<select id="informante" name="informante"
																			        class="form-control select">
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
														<div class="col-md-12">
															<hr>
															<div class="form-group">
																<label class="col-md-3 control-label">ESPECIFICACIONES</label>
																<div class="col-md-8 col-xs-12">
																	<div class="input-group">
																		<span class="input-group-addon"><i
																					class="fa fa-comment-o"></i></span>
																		<input id="datoespecifico" name="datoespecifico"
																		       type="text" class="form-control">
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
													<div class="panel-heading">PERSONAL COP</div>
													<div class="panel-body">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-4  control-label">TÉCNICO DE
																	CONTROL</label>
																<div class="col-md-8 col-xs-12">
																	<select id="tecnico" name="tecnico"
																	        class="form-control select">
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
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">DESCRIPCIÓIN DEL HECHO</div>
													<div class="panel-body">
														<section>
															<label class="label"></label>
															<div class="textarea">
																<textarea class="form-control" rows="3"
																          name="descripcion" id="descripcion"
																          placeholder="DESCRIPCIÓN"></textarea>
															</div>
														</section>
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
            var cadena = $("#novedadform").serialize();
            console.log(cadena);
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
                });
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
        $("#codptoperador2").keyup(function () {
            $.post("/operaciones/nombreoperador", {codoperador: $(this).val()})
                .done(function (data) {
                    $("#nombrereemplazo").html(data);
                });
            $.post("/operaciones/idoperador", {codoperador: $(this).val()})
                .done(function (data) {
                    $("#idreemplazo").html(data);
                    $("#codreemplazo").val(data);
                    if ($.isNumeric(data)) {
                        $("#imgdiv2").html('<img class="img-responsive" src="img/fotosempleados/' + data + '.jpg" alt="">');
                    } else {
                        $("#imgdiv2").html('<img class="img-responsive" src="img/fotosempleados/silueta.png" alt="">');
                    }
                });

        });
    };
    // end pagefunction

    // Load bootstrap wizard dependency then run pagefunction
    pagefunction();
    $(document).ready(function () {
        $('#novedadform').formValidation({
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
                checklist: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
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
                codreemplazo: {
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
                horapresentacion: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                horaservicio: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                lugarservicio: {
                    validators: {
                        notEmpty: {
                            message: 'Este campo es obligatorio'
                        }
                    }
                },
                datoespecifico: {
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
                var fv = $('#novedadform').data('formValidation'), // FormValidation instance
                    step = data.step,                              // Current step
                    // The current step container
                    $container = $('#novedadform').find('.step-pane[data-step="' + step + '"]');

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
                var fv = $('#novedadform').data('formValidation'),
                    step = $('#myWizard').wizard('selectedItem').step,
                    $container = $('#novedadform').find('.step-pane[data-step="' + step + '"]');

                // Validate the last step container
                fv.validateContainer($container);

                var isValidStep = fv.isValidContainer($container);
                if (isValidStep === true) {
                    // Uncomment the following line to submit the form using the defaultSubmit() method
                    // fv.defaultSubmit();

                    // For testing purpose
                    var cadena = $("#novedadform").serialize();
                    console.log(cadena);
                    $.post("/operaciones/novedad/registrar", cadena)
                        .done(function (data) {
                        	alert('Registro grabado exitosamente!');
                            window.location = "/home";
                        })
                }
            });
    });
</script>
