@extends('layouts.app')

@section('content')
<div class="container">


    @foreach( $publicaciones as $publicacion)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ action('PostController@show', $publicacion->id) }}">{{ $publicacion->title }}</a>
                    </h5>
                    <div class="text-center">
                <form method="POST" action="{{ url('posts/'. $publicacion->id) }}">
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
                </div>
                <img src="{{ asset($publicacion->image) }}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
    @endforeach
    {{ $publicaciones->links() }}
</div>
@endsection