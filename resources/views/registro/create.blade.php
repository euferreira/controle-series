@extends('layout')

@section('cabecalho')
Registrar-se    
@endsection

@section('conteudo')
<form method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required class="form-control">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required class="form-control" min="1">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Registrar</button>    
</form>    
@endsection