@foreach($tiponovedades as $tiponovedad)
    {{$tiponovedad->Descripcion}}<br>
    @foreach($tiponovedad->especificaciones as $especificacion)
        {{$especificacion->Descripcion}}<br>
        <select name="" id="">
        @foreach($especificacion->detalles as $detalle)
                <option value="{{$detalle->IdTipoNovedadDet}}">
                    {{$detalle->Descripcion}}
                </option>
        @endforeach
        </select>
        <br>
    @endforeach
    <br>
@endforeach
<select name="" id="">
    @foreach($sentidos as $sentido)
        <option value="">
            {{$sentido->Descripcion}}
        </option>
    @endforeach
</select><br><br>
<select name="" id="">
    @foreach($informantes as $informante)
        <option value="{{$informante->Descripcion}}">
            {{$informante->Descripcion}}
        </option>
    @endforeach
</select>
<br>
<br>
<form action="provincias" method="post">
    <select name="dep" id="dep">
        @foreach($departamentos as $departamento)
            <option value="{{$departamento->IdDepartamento}}">
                {{$departamento->Descripcion}}
            </option>
        @endforeach
    </select>
    <input type="submit" value="BuscarProv">
</form>
<select name="" id="">
    @foreach($tecnicos as $tecnico)
        <option value="{{$tecnico->IdEmpleado}}">
            {{$tecnico->Nombre}} {{$tecnico->ApellidoPaterno}} {{$tecnico->ApellidoMaterno}}
        </option>
    @endforeach
</select>
<br>
<br>
<select name="" id="">
    @foreach($supervisores as $supervisor)
        <option value="{{$supervisor->IdEmpleado}}">
            {{$supervisor->Nombre}} {{$supervisor->ApellidoPaterno}} {{$supervisor->ApellidoMaterno}}
        </option>
    @endforeach
</select><br><br>
<form action="servicio" method="post">
    <input type="text" name="var1" id="var1">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <input type="submit" value="Find">
</form>