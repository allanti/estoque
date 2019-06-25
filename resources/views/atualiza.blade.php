@extends('principal')

@section('conteudo')
<form action="/produtos/atualiza" method="post">
	<input type="hidden" name="_token" value=" {{ csrf_token() }} ">
	<input type="hidden" name="id" value=" {{ $p->id }} ">
	<div class="container">
		<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control" value="{{ $p->nome }}">
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input name="valor" class="form-control" value="{{ $p->valor }}">
		</div>
		<div class="form-group">
			<label>Quantidade</label>
			<input name="quantidade" class="form-control" value="{{ $p->quantidade }}">
		</div>
		<div class="form-group">
			<label>Tamanho</label>
			<input name="tamanho" class="form-control" value="{{ $p->tamanho }}">
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<textarea name="descricao" class="form-control">{{ $p->descricao }}</textarea>
		</div>

		<button class="btn btn btn-success" type="submit">Enviar</button>
	</div>
</form>
@stop