<!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Módulos del Sistema
		</h1>
	</div>
	<!-- end col -->
	
	
</div>
<!-- end row -->


	<!-- row -->

	<div class="row">

		<!-- a blank row to get started -->
		<div id="panelGeneral" class="col-sm-12">
			<div class="row">
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/operaciones.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Operaciones</div>
				</div>
              </div>
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/mantenimientoV2.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Mantenimiento</div>
				</div>
              </div>
              <div class="col-md-3">
              	<a class="btnMenuDash" href="javascript: return false;" data-menu="Logistica">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/logistica4.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Logística</div>
				</div>
				</a>
              </div>
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/tramites.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Trámites</div>
				</div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/legalv2.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Jurídico</div>
				</div>
              </div>
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/rrhh.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">RRHH</div>
				</div>
              </div>
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/finanzas.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Finanzas</div>
				</div>
              </div>
              <div class="col-md-3">
              	<div class="panel panel-default">
				  <div class="panel-body" align="center">
				    <img src="img/iconos/sistemas.png" height="100" />
				  </div>
				  <div class="panel-footer" align="center">Sistemas</div>
				</div>
              </div>
            </div>
		</div>
			
	</div>

	<!-- end row -->



<script type="text/javascript">
	

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 * TO LOAD A SCRIPT:
	 * var pagefunction = function (){ 
	 *  loadScript(".../plugin.js", run_after_loaded);	
	 * }
	 * 
	 * OR you can load chain scripts by doing
	 * 
	 * loadScript(".../plugin.js", function(){
	 * 	 loadScript("../plugin.js", function(){
	 * 	   ...
	 *   })
	 * });
	 */
	
	// pagefunction
	
	var pagefunction = function() {
		// clears the variable if left blank
		$(".btnMenuDash").click(function(){
			menuOpt = $(this).data('menu');
			
		});
	};
	
	// end pagefunction

	// destroy generated instances 
	// pagedestroy is called automatically before loading a new page
	// only usable in AJAX version!

	var pagedestroy = function(){
		
		/*
		Example below:

		$("#calednar").fullCalendar( 'destroy' );
		if (debugState){
			root.console.log("✔ Calendar destroyed");
		} 

		For common instances, such as Jarviswidgets, Google maps, and Datatables, are automatically destroyed through the app.js loadURL mechanic

		*/
	}

	// end destroy
	
	// run pagefunction
	pagefunction();
	
</script>
