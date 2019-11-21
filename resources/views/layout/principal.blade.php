<!DOCTYPE html>
<html>
<head>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="https://kit.fontawesome.com/7bd521465d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/css/custom.css">

	

	
	<title>Controle de Estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="{{ action('ProdutoController@Lista') }}" class="navbar-brand"> Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ action('ProdutoController@Lista') }}">Listagem</a></li>
					<li><a href="{{ action('ProdutoController@Novo') }}">Novo</a></li>
				</ul>
			</div>
		</nav>
		
		@yield('conteudo')

		
	</div>
	<footer class="footer">Copyright</footer>
</body>
</html>