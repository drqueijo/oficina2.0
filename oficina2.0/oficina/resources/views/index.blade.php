@extends('templates.template')
@section('content')

@csrf
<table class="table table-striped table-dark">
<h2 class="text-center font-weight-bold mb-4">Orçamentos</h2>

<a href="{{url('orcamentos/create')}}">
        <button type="button" class="btn btn-light mb-2"><i class="fas fa-plus"></i> Adicionar </button>
      </a>
  <thead>
    <tr>
      <th scope="col">Vendedor</th>
      <th scope="col">Cliente</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      
  @foreach($orcamento as $object)
    
    <tr>
      <th scope="row">{{$object->vendedor}}</th>
      <td>{{$object->cliente}}</td>
      <td>{{$object->valor}}</td>
      <td>{{$object->created_at}}</td>
      <td>
      <a href="{{url("orcamentos/$object->id")}}">
        <button type="button" class="btn btn-light" style="margin-left: 3px;"><i class="fas fa-eye"></i> Visualizar</button>
      </a>
      <a href="{{url("orcamentos/$object->id/edit")}}">
        <button type="button" class="btn btn-light" style="margin-left: 3px;"> <i class="fas fa-pen"></i> Editar</button>
      </a>
      <a href="{{url("orcamentos/$object->id")}}" class="js-del">
        <button class="btn btn-danger ml-3">Deletar <i class="fas fa-minus-square"></i></button>
      </a>
      </td>
    
    </tr>
 
  @endforeach
 


</table>

@endsection