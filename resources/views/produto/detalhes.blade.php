@extends('/layout/principal')

@section('conteudo')
	<h1>Detalhes do Produto</h1>
		<ul>
			<li><b>Nome: </b> {{$p->nome}} </li>
			<li><b>Valor: </b>R$ {{$p->valor}} </li>
			<li><b>Descrição do Produto: </b> {{$p->descricao}} </li>
			<li><b>Quantidade: </b> {{$p->quantidade}} </li>
		</ul>

	<a href="{{ action('ProdutoController@Edita', $p->id) }}"><i class="fas fa-edit"></i>Editar</a>	
@stop

