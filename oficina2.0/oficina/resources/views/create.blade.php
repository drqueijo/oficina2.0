@extends('templates.template')
@section('content')
<table class="table table-striped table-dark " style="height: 100%">
<h2 class="text-center font-weight-bold mb-4">@if(isset($orcamento))Editar @else Cadastrar @endif</h2>

<div class="col-8 m-auto">

  @if(isset($orcamento))
    <form action="{{url('orcamentos/'.$orcamento->id)}}" name="formEdit" id="formEdit" method="post">
      @method('PUT') 
  @else
    <form action="{{url('orcamentos')}}" name="formCad" id="formCad" method="post"> 
  @endif
    @csrf
      <input class="form-control mb-4" type="text" name="cliente" id="cliente" placeholder="Nome do cliente" value="{{$orcamento->cliente ?? ''}}">
      <input class="form-control mb-4" type="text" name="vendedor" id="vendedor" placeholder="Nome do vendedor"  value="{{$orcamento->vendedor ?? ''}}">
      <input class="form-control mb-4" type="text" name="descricao" id="descricao" placeholder="Descrição"  value="{{$orcamento->descricao ?? ''}}">
      <input class="form-control mb-4" type="text" name="valor" id="valor" placeholder="Valor orçado"  value="{{$orcamento->valor ?? ''}}">
      <input class="btn btn-light" type="submit" value="@if(isset($orcamento))Editar @else Cadastrar @endif">
      <a href="{{url("orcamentos")}}">
        <button type="button" class="btn btn-danger" style="float: right;"> Voltar</button>
      </a>
      
    
  </form>
  @if(isset($errors)&& count($errors)>0)
     <div class="text-center mt-4 mb-4 alert-danger rounded-lg">
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>
    @endif
    
</div>

</table>


@endsection