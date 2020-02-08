@extends('layouts.app')

@section('titulo')
    {{ "Login" }}
@endsection

@section('conteudo')

@include('inc/info_usuario')

<div class="row justify-content-center" style="margin-top:5%">

    <div class="col col-lg-4 border">
        <h1 class="text-center">Sistema de login</h1>
        <form method="POST" action="/realizar_login">
            {{ csrf_field() }}
            <div class="form-group ">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="{{ asset('/cadastro_usuario') }}" class="badge badge-secondary">Cadastre-se</a><br>
        <a href="{{ asset('/recuperar_senha') }}" class="badge badge-secondary">Recuperar senha</a>
    </div>
</div>
@endsection