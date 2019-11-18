@extends('/layout/principal')

@section('conteudo')

<h1>Editar Produto</h1>


<form action="{{ action('ProdutoController@Atualiza', $p->id) }}" method="POST">
	@method('PUT')
	@csrf

	@include('produto.formulario')

	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</form>


@stop