

<!DOCTYPE html>
@extends('/layout/principal')

@section('conteudo')
	<h1>Listagem de Produtos</h1>

	@if(empty($produtos))
		<div>Você não tem nenhum produto cadastrado.</div>

	@else
	<form action="{{ action('ProdutoController@Busca') }}" method="POST">
		@csrf
		<input type="text" name="busca" class="form-control" placeholder="Busca..">
	</form>
	<br>
	<table class="table table-bordered table-hover" style="text-align: center">
	<tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Visualizar</th>
      <th scope="col">Remover</th>
    </tr>
		@foreach ($produtos as $p)
		<tr class="{{ $p->quantidade <= 1 ? 'table-danger' : '' }}">
			<td > {{$p->nome}} </td>
			<td> {{$p->valor}} </td>
			<td> {{$p->descricao}} </td>
			<td> {{$p->quantidade}} </td>
			<td><a href="{{ action('ProdutoController@Mostra', $p->id) }}"><i class="fas fa-search"></i></a></td>
			<td><a href="{{ action('ProdutoController@Remove', $p->id) }}"><i class="fas fa-trash"></i></a></td>
		</tr>
	    @endforeach
	</table>
	@endif
	<span class="badge badge-danger">Um ou menos item no estoque</span>
	
	@if(old('nome'))
		<div class="alert alert-success"> <strong>Sucesso!</strong> 
			O Produto {{ old('nome') }} foi adicionado. 
		</div>
	@endif
@stop














