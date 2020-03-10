@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header navbar">
                Crear una pelicula

            </div>

            <div class="card-body">
                <p>Cargar los datos de la película</p>

            <form action="{{ route('peliculas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="titulo" class="col-md-4 col-form-label text-md-right">Título</label>

                    <div class="col-md-6">
                        <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo"
                            value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>

                        @error('titulo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>

                    <div class="col-md-6">
                        <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                            value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Crear Película
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
