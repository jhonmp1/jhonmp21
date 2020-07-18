@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                <fieldset>
                    <h5>Editar Usuario</h5>
                    <div class="form-group ">
                        <label for="name" class="col-lg-label">Nombre</label>
                        <div class="col-lg-5 col text-center">
                            <input type="text" class="form-control" id="name" name="name" value="{!!  $usuario->name !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-label">Email</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="email" name="email" value="{!!  $usuario->email !!}">
                        </div>
                    </div>

                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger col text-center">{{ $error }}</div>
                @endforeach
                @if(session('status'))
                    <div class="alert alert-success col text-center">
                        {{ session('status') }}
                    </div>
                @endif
                {!! csrf_field() !!}
 
                    <div class="form-group ">
                        <div class="col">
                            <a class="btn btn-black" href="{{ route('MyPosts') }}" role="button">Cancelar</a>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col text-center">
                            <a href="{{ route('logout') }}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ELIMINAR PERFIL</a>
                        </div>
                    </div>
                     
                </fieldset>
                
            </form>
        </div>
    </div>
@endsection