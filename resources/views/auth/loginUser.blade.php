@extends('layouts.base') 

@section('header', 'Criando usuário')

@section('content')
<div class="container">
    <h2>Login</h2>
    <form action="/login" method="post">
        <div class="form-group">
            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection