@extends('templates.template')
@section('content')
<table class="table table-striped table-dark " style="height: 100%">
<h2 class="text-center font-weight-bold mb-4">Cadastrar</h2>

<div class="col-8 m-auto">
  <form action="{{url('orcamentos')}}" name="formCad" id="formCad" method="post">
    @csrf
      <input class="form-control mb-4" type="text" name="cliente" id="cliente" placeholder="Nome do cliente" required>
      <input class="form-control mb-4" type="text" name="vendedor" id="vendedor" placeholder="Nome do vendedor" required>
      <input class="form-control mb-4" type="text" name="descricao" id="descricao" placeholder="Descrição" required>
      <input class="form-control mb-4" type="text" name="valor" id="valor" placeholder="Valor orçado" required>
      <input class="btn btn-light" type="submit" value="Cadastrar">
    
  </form>
</div>

</table>


@endsection