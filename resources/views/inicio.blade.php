@extends('layouts.plantilla')
@section('contenido')

<h1>Inicio</h1>
<div class="row container-card">

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-people-fill display-1 text-primary"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
            <p class="card-text">Gestión de los clientes que realizan compras en la ferretería.</p>
            <a href="/clientes" class="btn btn-primary">Ver Clientes</a>
        </div>
    </div>

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-file-earmark-bar-graph-fill display-1 text-success"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Condición IVA</h5>
            <p class="card-text">Tipos de facturación según el régimen fiscal del cliente.</p>
            <a href="/condicioniva" class="btn btn-primary">Ver Condiciones</a>
        </div>
    </div>

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-tags-fill display-1 text-warning"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Marcas</h5>
            <p class="card-text">Listado de las marcas disponibles de productos.</p>
            <a href="/marcas" class="btn btn-primary">Ver Marcas</a>
        </div>
    </div>

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-rulers display-1 text-info"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Medidas</h5>
            <p class="card-text">Unidades y medidas utilizadas para los productos.</p>
            <a href="/medidas" class="btn btn-primary">Ver Medidas</a>
        </div>
    </div>

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-box-seam-fill display-1 text-danger"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Productos</h5>
            <p class="card-text">Catálogo de productos que ofrece la ferretería.</p>
            <a href="/productos" class="btn btn-primary">Ver Productos</a>
        </div>
    </div>

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-truck-front-fill display-1 text-secondary"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Proveedores</h5>
            <p class="card-text">Empresas o personas que abastecen los productos.</p>
            <a href="/proveedores" class="btn btn-primary">Ver Proveedores</a>
        </div>
    </div>

    <div class="card m-3 text-center" style="width: 18rem;">
        <div class="mt-4">
            <i class="bi bi-geo-alt-fill display-1 text-dark"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Provincias</h5>
            <p class="card-text">Ubicaciones geográficas asociadas a clientes o proveedores.</p>
            <a href="/provincias" class="btn btn-primary">Ver Provincias</a>
        </div>
    </div>

</div>

@endsection
