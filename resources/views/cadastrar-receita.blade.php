@extends('layouts.base')
@section('content')
{{$request = 'oi'}}

<div id="cadastro" class="form-container">
    <form class="form" method="post" action='/cadastrar-receita'>
    @csrf
        <h2 class="mb-4">Cadastrar Receita:</h2>
        @if (isset($mensagem))
            <div class="alert alert-success" role="alert">
                {{$mensagem}}
            </div>
        @endif
        <input class="form-control" type="text" name="nomeReceita" placeholder="Nome da Receita" required>
        <ul id="adicionarIngrediente" style="list-style-type: none;">
        
        </ul>
        <div class="form-inline">
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="ingrediente[]" placeholder="ingrediente" required>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="ingrediente[]" placeholder="quantidade" required>
            </div>
            <a onclick="adicionarIngrediente()" class="btn btn-outline-success btn-sm">+</a>
        </div>
        <select name="categoria" class="form-control mdb-select md-form mb-3">
        <option value="0" selected="selected">Categoria</option>
            <option value="1">carne</option>
            <option value="2">frango</option>
            <option value="3">Peixe</option>
            <option value="4">massas</option>
        </select>
        <textarea class="form-control" rows="5" cols="33" name="modoDePreparo" placeholder="Modo de Preparo"></textarea>
        <br>
        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
        <button id="cadastro-btn" class='btn btn-primary' type="submit">Enviar Receita</button>
    </form> 
</div>
  <script src="../js/cadastrar-receita.js"></script>          
@endsection