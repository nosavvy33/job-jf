<style type="text/css">
.select2.select2-container.select2-container--default{
	width: 100% !important;
}
.select2-selection.select2-selection--multiple{
	border: 1px solid #BFBFBF;
}
</style>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="pull-left">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-pencil-square-o fa-fw "></i>Proveedores - Nuevo</h1>
		</div>
		<div class="pull-right" style="margin-top:12px;">
			<button type="button" id="btnRetornar" class="btn btn-default">
				<span class="glyphicon glyphicon-remove"></span> Cancelar
			</button>
		</div>
	</div>
</div>
<div class="widget-body fuelux">
	<div class="wizard" data-initialize="wizard" id="myWizard">
		<div class="borderline">
			<div class="steps-container">
				<ul class="steps">
					<li data-step="1" class="active">
						<span class="badge badge-info">1</span>Generales<span class="chevron"></span>
					</li>
					<li data-step="2">
						<span class="badge">2</span>Contribuyente<span class="chevron"></span>
					</li>
					<li data-step="3">
						<span class="badge">3</span>Referencias<span class="chevron"></span>
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
			<form method="post" action="/logistica/proveedores/mantenimiento/guardar" class="form-horizontal">
				<div class="step-pane active sample-pane alert" data-step="1">
					<h3>Datos Generales</h3>
					<div class="panel panel-default">
						<div class="panel-heading">DATOS</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label">Tipo</label>
										<div class="col-md-8 col-xs-12">
											<select id="tipo" name="tipo" class="form-control select">
												<option value="1">PERSONA JURIDICA</option>
												<option value="2">PERSONA NATURAL</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label id="txtNumDoc" class="col-md-4 control-label">RUC</label>
										<div class="col-md-8 col-xs-12">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
											<input type="number" id="numDocumento" name="numDocumento" class="form-control" >
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 datoEmpresa">
									<div class="form-group">
										<label class="col-md-4 control-label">Nombre Comercial</label>
										<div class="col-md-8 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input id="nombreComercial" name="nombreComercial" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row datoEmpresa">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Razón Social</label>
										<div class="col-md-10 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input id="razonSocial" name="razonSocial" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row datoPersona" style="display:none">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Nombres</label>
										<div class="col-md-10 col-xs-12 form-inline">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" >
											</div>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input type="text" id="apellidoPaterno" name="apellidoPaterno" class="form-control" placeholder="Apellido Paterno" />
											</div>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input type="text" id="apellidoMaterno" name="apellidoMaterno" class="form-control" placeholder="Apellido Materno" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Dirección Fiscal</label>
										<div class="col-md-10 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input id="direccionFiscal" name="direccionFiscal" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-10 col-xs-12 form-inline">
											<select id="cmbRegion" class="form-control cmbUbigeo" data-tipo="provincia" data-combo="cmbProvincia" data-distrito="cmbDistrito">
										    	<option value="0">Selecciona una opción</option>
										    	@foreach($regiones as $region)
												<option value="{{$region->IdUbigeo}}">{{$region->Descripcion}}</option>
												@endforeach
										    </select>
											<select id="cmbProvincia" class="form-control cmbUbigeo" data-tipo="distrito" data-combo="cmbDistrito" disabled="disabled">
										    	<option value="0">Selecciona una opción</option>
										    </select>
											<select id="cmbDistrito" name="cmbDistrito" class="form-control" disabled="disabled">
										    	<option value="0">Selecciona una opción</option>
										    </select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Referencia</label>
										<div class="col-md-10 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input id="referencia" name="referencia" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label">Tipo Entidad</label>
										<div class="col-md-8 col-xs-12">
											<select  name="tipoEntidad" class="form-control">
												<option value="1">PÚBLICO</option>
												<option value="2">PROVEEDOR</option>
												<option value="3">CLIENTE</option>
												<option value="4">TRABAJOR</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Tipo Negocio</label>
										<div class="col-md-10 col-xs-12" style="padding-top:5px">
											<input type="checkbox" name="tipoNegocio[]" value="1"> FABRICANTE
											<input type="checkbox" name="tipoNegocio[]" value="2"> PROVEEDOR 
											<input type="checkbox" name="tipoNegocio[]" value="3"> CLIENTE 
											<input type="checkbox" name="tipoNegocio[]" value="4"> TRABAJOR
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label">Días de Crédito</label>
										<div class="col-md-8 col-xs-12">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
											<input type="number" id="diasCredito" name="diasCredito" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label">Verificado</label>
										<div class="col-md-8 col-xs-12" style="padding-top:5px">
											<input type="checkbox" name="verificado" value="" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step-pane sample-pane alert" data-step="2">
					<h3>Datos de Contribuyente</h3>
					<div class="panel panel-default">
						<div class="panel-heading">DATOS</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Dirección Procesal</label>
										<div class="col-md-10 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input id="direccionProcesal" name="direccionProcesal" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-10 col-xs-12 form-inline">
											<select id="cmbRegion2" class="form-control cmbUbigeo" data-tipo="provincia" data-combo="cmbProvincia2" data-distrito="cmbDistrito2">
										    	<option value="0">Selecciona una opción</option>
										    	@foreach($regiones as $region)
												<option value="{{$region->IdUbigeo}}">{{$region->Descripcion}}</option>
												@endforeach
										    </select>
											<select id="cmbProvincia2" class="form-control cmbUbigeo" data-tipo="distrito" data-combo="cmbDistrito2" disabled="disabled">
										    	<option value="0">Selecciona una opción</option>
										    </select>
											<select id="cmbDistrito2" name="cmbDistrito2" class="form-control" disabled="disabled">
										    	<option value="0">Selecciona una opción</option>
										    </select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label">Ficha</label>
										<div class="col-md-8 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
												<input id="ficha" name="ficha" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label">Inicioe de Oper.</label>
										<div class="col-md-8 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input class="form-control" id="fechaOperacion" name="fechaOperacion" value="{{date('Y-m-d')}}" type="date" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Rubros</label>
										<div class="col-md-10 col-xs-12">
											<select id="rubros" name="rubros" multiple="multiple">
												@foreach($rubros as $rubro)
												<option value="{{$rubro->IdRubro}}">{{$rubro->Descripcion}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-2 control-label">Patrón</label>
										<div class="col-md-10 col-xs-12" style="padding-top:5px">
											<input type="checkbox" name="patron[]" value="1" /> Retención 
											<input type="checkbox" name="patron[]" value="2" /> Percepción 
											<input type="checkbox" name="patron[]" value="3" /> Buen contribuyente
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step-pane sample-pane alert" data-step="3">
					<h3>Datos de Contácto</h3>
					<table id="tablaDataContacto" class="table table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Ape. Pat</th>
								<th>Ape. Mat</th>
								<th>Área</th>
								<th>Cargo</th>
								<th>Teléfono</th>
								<th>Celular</th>
								<th>Email</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr id="filaContacto">
								<td><input type="text" name="nombreContacto[]" class="form-control" /></td>
								<td><input type="text" name="apellidoPaternoContacto[]" class="form-control" /></td>
								<td><input type="text" name="apellidoMaternoContacto[]" class="form-control" /></td>
								<td>
									<select class="form-control cmbArea">
										<option value="0">Seleccionar una opción</option>
										<option value="1">GERENCIA</option>
										<option value="2">CRÉDITO Y COBRANZAS</option>
										<option value="3">CONTABILIDAD Y FINANZAS</option>
										<option value="4">OPERACIONES</option>
										<option value="5">LOGISTICA</option>
										<option value="6">VENTAS</option>
										<option value="7">ADMINISTRACION</option>
										<option value="8">FINANZAS</option>
										<option value="9">MANTENIMIENTO</option>
										<option value="10">RECURSOS HUMANOS</option>
										<option value="11">LEGAL</option>
										<option value="12">SISTEMAS</option>
										<option value="13">LAVADO</option>
									</select>
								</td>
								<td class="filaComboCargo">
									<select class="form-control cmbCargo" disabled="disabled">
										<option value="0">Seleccionar una opción</option>
									</select>
								</td>
								<td><input type="text" name="telefonoContacto[]" class="form-control" /></td>
								<td><input type="text" name="celularContacto[]" class="form-control" /></td>
								<td><input type="text" name="emailContacto[]" class="form-control" /></td>
								<td>
									<button type="button" class="btn btn-danger btnEliminarFila">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
					<div align="right">
						<button type="button" data-fila="Contacto" class="btn btn-default btnAddFila">
							<span class="glyphicon glyphicon-plus"></span> Añadir Fila
						</button>
					</div>
					<h3>Cuentas de Banco</h3>
					<table id="tablaDataBanco" class="table table-bordered">
						<thead>
							<tr>
								<th>Banco</th>
								<th>Tipo Cuenta</th>
								<th>Moneda</th>
								<th>Nro Cuenta</th>
								<th>CCI</th>
								<th>Predeterminado</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr id="filaBanco">
								<td>
									<select name="banco[]" class="form-control">
										<option value="1">BCP</option>
										<option value="2">BBVA</option>
										<option value="3">BANCO DE LA NACIÓN</option>
										<option value="4">IBK</option>
										<option value="5">SCOTIABANK</option>
										<option value="6">FINANCIERO</option>
										<option value="7">CITIBANK</option>
										<option value="8">BIF</option>
										<option value="9">BANCOLOMBIA</option>
										<option value="10">HSBC</option>
									</select>
								</td>
								<td>
									<select name="tipoBanco[]" class="form-control">
										<option value="1">CORRIENTE</option>
										<option value="2">AHORROS</option>
										<option value="3">DETRACCION</option>
										<option value="4">SUELDO</option>
										<option value="5">CTS</option>
										<option value="6">RETENSIÓN JUDICIAL</option>
									</select>
								</td>
								<td>
									<select name="moneda[]" class="form-control">
										<option value="EUR">EUROS</option>
										<option value="PEN">SOLES</option>
										<option value="USD">DOLARES</option>
									</select>
								</td>
								<td><input type="text" name="nroCuenta[]" class="form-control" /></td>
								<td><input type="text" name="cci[]" class="form-control" /></td>
								<td><input type="checkbox" name="pre[]" class="form-control chkPre" /></td>
								<td>
									<button class="btn btn-danger btnEliminarFila">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
					<div align="right">
						<button type="button" data-fila="Banco" class="btn btn-default btnAddFila">
							<span class="glyphicon glyphicon-plus"></span> Añadir Fila
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- widget div-->
</div>
<script type="text/javascript">

    pageSetUp();

    // PAGE RELATED SCRIPTS

    // pagefunction

    var pagefunction = function () {
    	$("#btnRetornar").click(function(){
    		loadURL("logistica/proveedores/mantenimiento", $('#content'));
    	});
    	$('#tipo').change(function(){
    		val_tipo = $(this).val();
    		if(val_tipo==1){
    			$('#txtNumDoc').html("RUC");
    			$('.datoEmpresa').show();
    			$('.datoPersona').hide();
    		}else{
    			$('#txtNumDoc').html("DNI");
    			$('.datoEmpresa').hide();
    			$('.datoPersona').show();
    		}
    	});
    	$('.cmbUbigeo').change(function(){
    		val_id = $(this).val();
    		val_tipo = $(this).data("tipo");
    		val_combo = $(this).data("combo");
    		if(val_tipo=="provincia"){
    			val_combo_distrito = $(this).data("distrito");
    			$('#'+val_combo_distrito).attr('disabled',true).html('<option value="0">Selecciona una opción</option>');
    		}
    		datos = {
    			tipo : val_tipo,
    			idubigeo : val_id
    		}
    		$.post("ubigeo/listar", datos, function(data){
    			$('#'+val_combo).html(data);
    			$('#'+val_combo).attr('disabled',false);
    		});
    	});
    	$('.btnAddFila').click(function(){
    		ref = $(this).data('fila');
    		fila = $('#fila'+ref).clone();
    		$('#tablaData'+ref).append(fila);
    	});
    	$("tbody").on("change",".cmbArea",function() {
			val_id = $(this).val();
			combo = $(this).parent().parent().find('.cmbCargo');
    		datos = {
    			idarea : val_id
    		}
    		$.post("cargo/listar", datos, function(data){
    			combo.attr('disabled',false);
    			combo.html(data);
    		});
		});
		$("tbody").on("click",".btnEliminarFila",function() {
			$(this).parent().parent().remove();
		});

		$("#rubros").select2();

    };

    // end pagefunction

    // Load form valisation dependency
    loadScript("js/plugin/jquery-form/jquery-form.min.js", pagefunction);
    
</script>
