@extends('/layout/principal')

@section('conteudo')

<h1>Novo Produto</h1>

<form action="{{ action('ProdutoController@Adiciona') }}" method="POST">
	@csrf

	@include('produto.formulario')

	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>


@stop