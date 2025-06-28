@extends('layouts.plantilla')
@section('contenido')

<h1>Alta de un Cliente</h1>

<div class="alert bg-light p-4 col-8 mx-auto shadow">
    <form action="/clientes/store" method="post" >
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" required>

            <label for="dni">DNI</label>
            <input type="number" name="dni" class="form-control" id="dni" required max='99999999' min='10000000'>

            <label for="fechanacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fechanacimiento" class="form-control" id="fechanacimiento" required>

            <label for="rela_provincia">ID Provincia</label>
            <input type="number" name="rela_provincia" class="form-control" id="rela_provincia" required>

            <label for="localidad">Localidad</label>
            <input type="text" name="localidad" class="form-control" id="localidad" required>

            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" id="direccion" required>

            <label for="cuit">CUIT</label>
            <input type="number" name="cuit" class="form-control" id="cuit" required max='99999999999' min='10000000000'>

            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>

            <label for="telefono">Teléfono</label>
            <input type="number" name="telefono" class="form-control" id="telefono" required>

            <label for="rela_condicioniva">Condición IVA</label>
            <input type="number" name="rela_condicioniva" class="form-control" id="rela_condicioniva" required>
        </div>

        <button class="btn btn-success my-3 px-4">Guardar</button>
        <a href="/clientes/" class="btn btn-outline-secondary">
            Volver
        </a>
    </form>
</div>

@endsection