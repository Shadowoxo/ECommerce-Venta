@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm rounded-lg border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📦 Crear Nuevo Producto</h4>
            
        </div>

        <div class="card-body bg-white">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label fw-semibold">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Ej: Audífonos Bluetooth">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label fw-semibold">Descripción</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" rows="4" class="form-control" placeholder="Escribe una descripción detallada..."></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label fw-semibold">Precio</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" step="0.01" id="price" class="form-control" required placeholder="0.00">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="category" class="col-sm-2 col-form-label fw-semibold">Categoría</label>
                    <div class="col-sm-10">
                        <select name="category" id="category" class="form-select">
                            <option value="">Selecciona una categoría</option>
                            <option value="electronica">Electrónica</option>
                            <option value="ropa">Ropa y accesorios</option>
                            <option value="hogar">Hogar y Jardín</option>
                            <option value="deportes">Deportes</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tags" class="col-sm-2 col-form-label fw-semibold">Etiquetas</label>
                    <div class="col-sm-10">
                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Ej: oferta, destacado, nuevo">
                        <small class="text-muted">Separa las etiquetas con comas</small>
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="image" class="col-sm-2 col-form-label fw-semibold">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" id="image" class="form-control">
                        <small class="text-muted">Formatos aceptados: jpg, png, gif (máx. 2MB)</small>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary shadow-sm">
                        <i class="fas fa-save me-1"></i> Guardar producto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
