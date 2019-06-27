@extends('principal')

@section('conteudo')

@if($errors->all())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
	    <li>{{$error}}</li>
	    @endforeach
	</ul>
</div>
@endif

<form action="/produtos/adiciona" method="post">
	<input type="hidden" name="_token" value=" {{ csrf_token() }} ">
	<div class="container">
		<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control">
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input name="valor" class="form-control">
		</div>
		<div class="form-group">
			<label>Quantidade</label>
			<input name="quantidade" class="form-control">
		</div>
		<div class="form-group">
			<label>Tamanho</label>
			<input name="tamanho" class="form-control">
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<textarea name="descricao" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label>Categoria</label>
			<select name="categoria_id" class="form-control">
				@foreache($categoria as $c)
				<option value="$c->id">$c->nome</option>
				@endforeach
			</select>
		</div>

		<button class="btn btn btn-success" type="submit">Enviar</button>
	</div>
</form>
@stop