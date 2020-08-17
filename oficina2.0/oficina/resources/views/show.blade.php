@extends('templates.template')
@section('content')
<table class="table table-striped table-dark " style="height: 100%">
<h2 class="text-center font-weight-bold mb-4">Visualizar</h2>
<div class="card">
  <div class="card-header text-dark font-weight-bold">
    ID: {{$orcamento->id}}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p class="text-dark font-weight-bold">Cliente: {{$orcamento->cliente}}</p>
      <p class="text-dark font-weight-bold">Vendedor: {{$orcamento->vendedor}}</p>
      <p class="text-dark font-weight-bold">Descrição: {{$orcamento->descricao}}</p>
      <p class="text-dark font-weight-bold">Data: {{$orcamento->created_at}}</p>
      <footer class="blockquote-footer font-weight-bold">Preço: ${{$orcamento->valor}} Reais</footer>
    </blockquote>
  </div>
</div>
<a href="{{url('orcamentos')}}">
        <button type="button" class="btn btn-danger mt-4"><i class="fas fa-caret-square-left"></i> Voltar</button>
      </a>
</table>


@endsection