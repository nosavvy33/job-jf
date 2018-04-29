@foreach($acciones as $accion)
	<option value="{{$accion->IdAccionD}}">
		{{$accion->Descripcion}}
	</option>
@endforeach
