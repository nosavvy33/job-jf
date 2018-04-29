<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-pencil-square-o fa-fw "></i>Proveedores</h1>
	</div>
</div>

<div class="row">
	<article class="col-sm-12 col-md-12 col-lg-12">
		<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
			<header role="heading">
				<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
				<h2>Lista de Proveedores</h2>
				<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
			</header>
			<!-- widget div-->

			<div class="panel panel-default">
			  <div class="panel-body">
			  	<form method="post" >
				  	<div class="form-inline" style="margin-bottom:14px;">
						  <div class="form-group">
						    <label for="exampleInputName2">Tipo Contribuyente:</label>
						    <select name="" class="form-control">
						    	<option value="1">PERSONA JURIDICA</option>
						    	<option value="2">PERSONA NATURAL</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail2">Nombre:</label>
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputName2">Nro. Documento:</label>
						    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputName2">Giro de Negocio:</label>
						    <select name="" class="form-control">
						    	<option value="0">Selecciona una opción</option>
						    	<option value="1">FABRICANTE</option>
						    	<option value="2">DISTRIBUIDOR MAYORISTA</option>
						    	<option value="3">COMERCIALIZADOR</option>
						    	<option value="4">SERVICIOS</option>
						    </select>
						  </div>
						</div>
			    	<div class="form-inline" style="margin-bottom:14px;">
						  <div class="form-group">
						    <label for="cmbRegion">Región</label>
						    <select id="cmbRegion" class="form-control cmbUbigeo" data-tipo="provincia" data-combo="cmbProvincia">
						    	<option value="0">Selecciona una opción</option>
						    	@foreach($regiones as $region)
								<option value="{{$region->IdUbigeo}}">{{$region->Descripcion}}</option>
								@endforeach
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="cmbProvincia">Provincia</label>
						    <select id="cmbProvincia" class="form-control cmbUbigeo" data-tipo="distrito" data-combo="cmbDistrito" disabled="disabled">
						    	<option value="0">Selecciona una opción</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="cmbDistrito">Distrito</label>
						    <select id="cmbDistrito" name="cmbDistrito" class="form-control" disabled="disabled">
						    	<option value="0">Selecciona una opción</option>
						    </select>
						  </div>
						</div>
						<div class="form-inline">
							<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-search"></span> Buscar
							</button>
						</div>
					</form>
			  </div>
			</div>

			<div role="content">
				<div class="widget-body">
					<p align="right"><button type="button" class="btn btn-success btnNuevo">
						<span class="glyphicon glyphicon-plus"></span> Nuevo
					</button></p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Tipo Doc.</th>
								<th>Nro. Documento</th>
								<th>Fab</th>
								<th>Dist</th>
								<th>Com</th>
								<th>Serv</th>
								<th>Dirección</th>
								<th>Distrito</th>
								<th>País</th>
								<th>Verificado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>Data1</td>
								<td>
									<a href="" class="btn btn-info">
										<span class="glyphicon glyphicon-eye-open"></span> Ver
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</article>
</div>
<script type="text/javascript">

    pageSetUp();

    // PAGE RELATED SCRIPTS

    // pagefunction

    var pagefunction = function () {
    	$('.btnNuevo').click(function(){
    		loadURL("logistica/proveedores/mantenimiento/nuevo", $('#content'));
    	});
    	$('.cmbUbigeo').change(function(){
    		val_id = $(this).val();
    		val_tipo = $(this).data("tipo");
    		val_combo = $(this).data("combo");
    		if(val_combo=="cmbProvincia"){
    			$('#cmbDistrito').attr('disabled',true).html('<option value="0">Selecciona una opción</option>');
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
    };

    // end pagefunction

    // Load form valisation dependency
    loadScript("js/plugin/jquery-form/jquery-form.min.js", pagefunction);

</script>