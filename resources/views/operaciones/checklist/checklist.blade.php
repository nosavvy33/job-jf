<style>
	em.invalid {
		color: red;
	}
</style>
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-pencil-square-o fa-fw "></i>OPERACIONES</h1>
	</div>
</div>
<div class="row">
	<article class="col-sm-12 col-md-12 col-lg-12">

		<!-- Widget ID (each widget will need unique ID)-->
		<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false"
		     role="widget">
			<header role="heading">
				<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
				<h2>Novedad por CheckList</h2>
				<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
			</header>
			<!-- widget div-->

			<div role="content">
				<div class="widget-body">
					<form id="checkout-form" class="form-horizontal" novalidate="novalidate" onsubmit="return false">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">DATOS GENERALES</div>
									<div class="panel-body">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-md-4 control-label">TIPO NOVEDAD</label>
												<div class="col-md-8">
														<select name="cmbTipoNovedad" id="cmbTipoNovedad"
														        class="form-control">
															@foreach($tiponovedades as $tipo)
																<option value="{{$tipo->IdTipoData}}">{{$tipo->Descripcion}}</option>
															@endforeach
														</select>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-md-4 control-label">FECHA</label>
												<div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon"><i
																	class="fa fa-calendar"></i></span>
														<input type="date" name="txtFecha" id="txtFecha"
														       class="form-control" value="{{date('Y-m-d')}}"/>
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
												<div class="col-md-8">
													<div class="input-group">
																	<span class="input-group-addon"><i
																				class="fa fa-pencil"></i></span>
														<input id="txtCodProt2" name="txtCodProt2"
														       class="form-control" type="text">
														<input id="txtCodProt" name="txtCodProt"
														       type="text"
														       style="visibility: hidden" hidden="hidden">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">CÓDIGO PM</label>
												<div class="col-md-8">
													<p id="txtCodPm" class="form-control form-control-static"
													   style="background-color: #EEEEEE"></p>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">OPERADOR</label>
												<div class="col-md-8">
													<p id="txtOperador" class="form-control form-control-static"
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
										<div class="form-group">
											<label class="col-md-4 control-label">UNIDAD</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
													<input type="text" name="txtUnidad" id="txtUnidad"
													       class="form-control"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">PLACA</label>
											<div class="col-md-8">
												<p id="txtNroPlaca" class="form-control form-control-static"
												   style="background-color: #EEEEEE"></p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">CHECKLIST</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
													<input type="number" name="txtCheckList" id="txtCheckList"
													       class="form-control"/>
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
									<div class="panel-heading">DESCRIPCIÓN DEL HECHO</div>
									<div class="panel-body">
										@foreach($descripciones as $item)
											<div class="form-group">
												<label class="col-md-3 control-label" style="text-align: left">
													<div>
														<input type="checkbox" name="chkDescripcion[]"
														       id="chkDescripcion" class="checkDescripcion"
														       value="{{$item->IdTipoCHL}}"/> {{$item->Descripcion}}
													</div>
												</label>
												<div class="col-md-9">
													<input type="text" id="txtDescripcion_{{$item->IdTipoCHL}}"
													       name="txtDescripcion[]" class="form-control"
													       placeholder="Destalle de la descripción"
													       style="border-radius: 10px !important;"
													       disabled>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>

						<div class="form-actions">
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary" style="border-radius: 10px">Guardar
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- widget content -->
			</div>
			<!-- end widget div -->
		</div>
		<!-- end widget -->
		<!-- Widget ID (each widget will need unique ID)-->
	</article>
</div>

<script type="text/javascript">

    pageSetUp();

    // PAGE RELATED SCRIPTS

    // pagefunction

    var pagefunction = function () {

        var errorClass = 'invalid';
        var errorElement = 'em';

        var $checkoutForm = $('#checkout-form').validate({
            errorClass: errorClass,
            errorElement: errorElement,
            highlight: function (element) {
                $(element).parent().removeClass('state-success').addClass("state-error");
                $(element).removeClass('valid');
            },
            unhighlight: function (element) {
                $(element).parent().removeClass("state-error").addClass('state-success');
                $(element).addClass('valid');
            },

            // Rules for form validation
            rules: {
                cmbTipoNovedad: {
                    required: true
                },
                txtFecha: {
                    required: true
                },
                txtCodProt: {
                    required: true
                },
                txtUnidad: {
                    required: true
                },
                txtCheckList: {
                    required: true
                },
                'chkDescripcion[]': {
                    required: true
                }
            },

            // Messages for form validation
            messages: {
                cmbTipoNovedad: {
                    required: 'Por favor seleccione una opción'
                },
                txtFecha: {
                    required: 'Por favor ingrese una fecha'
                },
                txtCodProt: {
                    required: 'Por favor ingrese un código'
                },
                txtUnidad: {
                    required: 'Por favor ingrese un código'
                },
                txtCheckList: {
                    required: 'Por favor ingrese un código'
                },
                chkDescripcion: {
                    required: 'Por favor seleccione por lo menos una opción'
                }
            },

            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                data = $("form").serialize();
                $.post("/operaciones/checklist/registro", data, function (response) {
                    alert('Registro grabado exitosamente!');
                    window.location = "/home";
                });
            }
        });
        $("#txtCodProt2").keyup(function () {
            $.post("/operaciones/nombreoperador", {codoperador: $(this).val()})
                .done(function (data) {
                    $("#txtOperador").html(data);
                });
            $.post("/operaciones/idoperador", {codoperador: $(this).val()})
                .done(function (data) {
                    $("#txtCodPm").html(data);
                    $("#txtCodProt").val(data);
                    if ($.isNumeric(data)) {
                        $("#imgdiv").html('<img class="img-responsive" src="img/fotosempleados/' + data + '.jpg" alt="">');
                    } else {
                        $("#imgdiv").html('<img class="img-responsive" src="img/fotosempleados/silueta.png" alt="">');
                    }

                });
        });
	    /*$("#txtCodProt2").focusout(function () {
            data = {codoperador: $(this).val()};
            $.post("/operaciones/idoperador", data, function (response) {
                $("#txtCodPm").html(response);
	     console.log(data);
	     $("#txtCodProt").html(response);
	     if ($.isNumeric(data)) {
	     $("#imgdiv").html('<img class="img-responsive" src="img/fotosempleados/' + data + '.jpg" alt="">');
	     } else {
	     $("#imgdiv").html('<img class="img-responsive" src="img/fotosempleados/silueta.png" alt="">');
	     }

	     });
            $.post("/operaciones/nombreoperador", data, function (response) {
                $("#txtOperador").html(response);
            });
	     });*/
        $("#txtUnidad").focusout(function () {
            $.post("/operaciones/placa", {bus: $(this).val()}, function (response) {
                $("#txtNroPlaca").html(response);
            });
        });
        $('.checkDescripcion').click(function () {
            ref_id = $(this).val();
            if ($(this).is(':checked')) {
                $('#txtDescripcion_' + ref_id).removeAttr('disabled');
            } else {
                $('#txtDescripcion_' + ref_id).prop('disabled', 'disabled');
            }
        });

    };

    // end pagefunction

    // Load form valisation dependency
    loadScript("js/plugin/jquery-form/jquery-form.min.js", pagefunction);

</script>