<h1>Registro de veiculos</h1>
<form action="{{ route('registro_veiculo') }}" method="post">
    @csrf
    <input type="text" name="marca_modelo" id="marca_modelo" />
    <button type="submit">Enviar</button>
</form>