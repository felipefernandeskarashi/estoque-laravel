

<!DOCTYPE html>
@extends('/layout/principal')

@section('conteudo')
	<h1>Listagem de Produtos</h1>

	@if(empty($produtos))
		<div>Você não tem nenhum produto cadastrado.</div>

	@else
	<table class="table table-bordered table-hover" style="text-align: center">
	<tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">#</th>
    </tr>
		@foreach ($produtos as $p)
		<tr class="{{ $p->quantidade <= 1 ? 'table-danger' : '' }}">
			<td > {{$p->nome}} </td>
			<td> {{$p->valor}} </td>
			<td> {{$p->descricao}} </td>
			<td> {{$p->quantidade}} </td>
			<td><a href="produtos/mostra/{{$p->id}}"> <span class="glyphicon glyphicon-search">Visualizar</span></a></td>
		</tr>
	    @endforeach
	</table>
	@endif
	<span class="badge badge-danger">Um ou menos item no estoque</span>
@stop














