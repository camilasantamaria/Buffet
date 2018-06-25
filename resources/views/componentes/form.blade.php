<form action="{{ url('foo/bar') }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <input type="text" name="nombre" id="nombre" value="Texto inicial">
    <input type="text" name="apellido" id="apellido" value="Texto inicial">
    <input type="number" name="numero" id="numero">
    <label for="talla">Tipo Documento:</label>
    <select name="tipo_documento" id="tipo_documento">
        <option value="CC">CC</option>
        <option value="TI">TI</option>
        <option value="CE">CE</option>
        <option value="PS">PS</option>
        <option value="RC">RC</option>
        <option value="NIT">NIT</option>
    </select>
    <label for="correo">Correo electrónico:</label>
    <input type="email" name="correo" id="correo">
    <input type="text" name="usuario" id="usuario" value="Texto inicial">
    <input type="password" name="password" id="password">
    <input type="hidden" name="oculto" value="valor">
    <div>
        <button type="submit">Enviar</button>
        <input type="button">
    </div>

</form>