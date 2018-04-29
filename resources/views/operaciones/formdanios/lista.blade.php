@foreach($datos as $dato)
	<option value="{{$dato->IdTipoNovedad}}">
		{{$dato->Descripcion}}
	</option>

@endforeach
