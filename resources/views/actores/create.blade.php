@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header navbar">
                Agregar un Actor nuevo

            </div>

            <div class="card-body">
                <p>Cargar los datos del Actor</p>

            <form action="{{ route('actores.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                    <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                            value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Agregar Actor
                        </button>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
