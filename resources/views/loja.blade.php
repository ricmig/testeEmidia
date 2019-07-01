@extends('layouts.base')
@section('content')
<link rel="stylesheet" href="../css/loja.css"> 

<div class="container" style="margin-top:80px; height=100vh;">
  <div class="row">
        <div class="col-md-3 col-sm-12" id="categories">
            <ul class="list-group">
              <a href="/receitas"><li class="list-group-item list-group-item-action">Todos</li></a>
            </ul>
            <ul class="list-group">
              <a href="/receita/1"><li class="list-group-item list-group-item-action">Carne</li></a>
            </ul>
            <ul class="list-group">
              <a href="/receita/2"><li class="list-group-item list-group-item-action">Frango</li></a>
            </ul>
            <ul class="list-group">
              <a href="/receita/3"><li class="list-group-item list-group-item-action">Peixe</li></a>
            </ul>
            <ul class="list-group">
              <a href="/receita/4"><li class="list-group-item list-group-item-action">Massas</li></a>
            </ul>
        </div>

    <div class="col-md-9 col-sm-12">
      <div class="row">
        <div class="col-xs-12">
            {{ $receitas->links() }}
        </div>
      </div>
      <section id="produtos-wrapper" class="row">    
      @foreach($receitas as $receita)
        <div class="col-md-6 col-sm-6 col-xs-1" >
          <div class="card">
          <div class="card-body">
              <h5 class="nome-produto-card" id="produto-nome">{{ $receita->titulo }}</h5>
              @if(count($receita->ingredientes($receita->id_receita)) > 0)                             
              <strong>Ingredientes:</strong>
              @endif
              @foreach ($receita->ingredientes($receita->id_receita) as $ingrediente)
              <p> {{$ingrediente->nome_ingrediente}} - {{$ingrediente->quantidade}} </p>
              @endforeach
            <strong>Modo de Preparo:</strong>
            <p class="preco-card" id="produto-preco">{{ $receita->modo_de_preparo }}</p>                        
            </div>
          </div>
        </div>
        @endforeach
        
      </section>
    </div>


  </div>
</div>


