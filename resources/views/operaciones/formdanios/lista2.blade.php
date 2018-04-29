@forelse($datos as $dato)
	<option value="{{$dato->IdTipoNovedadDet}}">
		{{$dato->Descripcion}}
	</option>
@empty
	<option value="">
		-
	</option>
@endforelse