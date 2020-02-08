@extends('layouts.app')

@section('conteudo')

@include('inc/info_usuario')

<div class="row justify-content-center" style="margin-top:5%">

    <div class="col col-lg-4 border">
        <h1 class="text-center">Recuperar senha</h1>
        <form method="POST" action="/realizar_login">
            {{ csrf_field() }}
            <div class="form-group ">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <a href="{{ asset('/') }}" class="badge badge-secondary">Login</a><br>
    </div>
</div>
@endsection