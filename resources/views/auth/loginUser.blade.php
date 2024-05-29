@extends('layouts.base') 

@section('header', 'Criando usuário')

@section('content')
<div class="container">
    <h2>Login</h2>
    <form action="{{ route('routeLogin') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Usuário:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

@endsection