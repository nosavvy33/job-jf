<option value="0">Selecciona una opción</option>
@foreach($lista as $opcion)
<option value="{{$opcion->IdUbigeo}}">{{$opcion->Descripcion}}</option>
@endforeach