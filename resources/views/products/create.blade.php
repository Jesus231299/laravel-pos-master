@extends('layouts.admin')

@section('title', 'Create Product')
@section('content-header', 'Registrar nuevo producto')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Nombre del producto" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

             <div class="form-group">
                <label for="mark">Marca</label>
                <input type="text" name="mark" class="form-control @error('mark') is-invalid @enderror" id="mark"
                    placeholder="Marca del producto" value="{{ old('mark') }}">
                @error('mark')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

  {{--
 <div class="form-group">
            <label for="estado" class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-8">
                <select class="form-control" name="estado" id="estado">
                    @foreach ($marcas as $mark)
                        <option value="{{$mark->id_mar}}">{{$mark->nombre_mar}}</option>
                    @endforeach
                </select>
            </div>
        </div>  --}}

             <div class="form-group">
                <label for="category">Categoria</label>
                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category"
                    placeholder="Categoria del producto" value="{{ old('category') }}">
                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                    id="description" placeholder="Ingresa una breve descripcion del producto">{{ old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Imagen</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Selecciona un archivo</label>
                </div>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="barcode">Codigo de barras</label>
                <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                    id="barcode" placeholder="Ingresa" value="{{ old('barcode') }}">
                @error('barcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                    placeholder="Precio" value="{{ old('price') }}">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Cantidad</label>
                <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                    id="quantity" placeholder="Cantidad" value="{{ old('quantity', 1) }}">
                @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Estatus</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status') === 1 ? 'selected' : ''}}>Activo</option>
                    <option value="0" {{ old('status') === 0 ? 'selected' : ''}}>Inactivo</option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Registrar</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection