@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header navbar">
                    Lista de actores
                    @if (auth()->check())
                    <ul class="nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('actores.create')}}">Nuevo actor</a>
                        </li>

                    </ul>
                    @endif
                   
                </div>

                <div class="card-body">

                    <h3>Actores</h3>
                    <ul>
                        @forelse ($actores as $actor)
                        <li> <a href="{{route('actores.show',$actor)}}">{{ $actor->nombre }}</a> - ({{$actor->edad }})</li>
                        @empty
                        <p>Aca no cargaste nada</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
