@extends('layouts.plantilla')
@section('contenido')

    <h1>Alta de un Productos</h1>

<div class="alert bg-light p-4 col-8 mx-auto shadow">
    <form action="/productos/store" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" required>
        </div>

        <div class="form-group mb-3">
            <label for="rela_marcas">Marca (ID)</label>
            <input type="number" name="rela_marcas" class="form-control" id="rela_marcas" required>
        </div>

        <div class="form-group mb-3">
            <label for="rela_medidas">Medida (ID)</label>
            <input type="number" name="rela_medidas" class="form-control" id="rela_medidas" required>
        </div>

        <div class="form-group mb-3">
            <label for="rela_rubro">Rubro (ID)</label>
            <input type="number" name="rela_rubro" class="form-control" id="rela_rubro" required>
        </div>

        <div class="form-group mb-3">
            <label for="cantidad_actual">Cantidad Actual</label>
            <input type="number" name="cantidad_actual" class="form-control" id="cantidad_actual" required>
        </div>

        <div class="form-group mb-3">
            <label for="precio_venta">Precio de Venta</label>
            <input type="number" step="0.01" name="precio_venta" class="form-control" id="precio_venta" required>
        </div>

        <div class="form-group mb-3">
            <label for="precio_compra">Precio de Compra</label>
            <input type="number" step="0.01" name="precio_compra" class="form-control" id="precio_compra" required>
        </div>

        <div class="form-group mb-3">
            <label for="porcentaje_utilidad">Porcentaje de Utilidad</label>
            <input type="number" step="0.01" name="porcentaje_utilidad" class="form-control" id="porcentaje_utilidad" required>
        </div>

        <div class="form-group mb-3">
            <label for="rela_proveedor">Proveedor (ID)</label>
            <input type="number" name="rela_proveedor" class="form-control" id="rela_proveedor" required>
        </div>

        <div class="form-group mb-3">
            <label for="cantidad_minima">Cantidad Mínima</label>
            <input type="number" name="cantidad_minima" class="form-control" id="cantidad_minima" required>
        </div>

        <button class="btn btn-success my-3 px-4">Guardar</button>
        <a href="/productos/" class="btn btn-outline-secondary">Volver</a>
    </form>
</div>


@endsection