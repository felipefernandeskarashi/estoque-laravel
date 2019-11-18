	
@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>
				{{$error}}			
			</li>
			@endforeach
		</ul>
	</div>	
@endif

	<div class="form-group">
		<label>Nome</label>
		<input type="" name="nome" class="form-control" value="{{ $p->nome ?? old('nome') }}">
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<input type="" name="descricao" class="form-control" value="{{ $p->descricao ?? old('descricao') }}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="" name="valor" class="form-control" value="{{ $p->valor ?? old('valor') }}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade ?? old('quantidade') }}">
	</div>