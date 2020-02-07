@extends('layouts.app')

@section('titulo')
    {{ "Cadastro usuario" }}
@endsection

@section('conteudo')

<div class="row justify-content-center" style="margin-top:5%">
    <div class="col col-lg-4 border">
        <h1 class="text-center">Cadastro usuario</h1>
        
        @include('inc.erros')
        @include('inc.msg')

        <form method="POST" action="/realizar_cadastro">
            {{ csrf_field() }}
            <div class="form-group ">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                <small id="emailHelp" class="form-text text-muted">senha no minimo 3 digito, maximo 8</small>
            </div>
            <div class="form-group">
                <label for="cf_senha">Confirmar senha:</label>
                <input type="password" class="form-control" name="cf_senha" id="cf_senha" placeholder="Confirmar senha">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <a href="{{ asset('/') }}" class="badge badge-secondary">Realizar Login</a><br>
    </div>
</div>

@endsection