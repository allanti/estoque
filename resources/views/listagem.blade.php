@extends('principal')

@section('conteudo')
	<h1>Listagem de produtos</h1>
	<table class="table">
		@foreach ($produtos as $p)
		<tr class="{{ $p->quantidade <=1 ? 'alert-danger' : ''}}">
			<td> {{ $p->nome}} </td>
            <td> {{ $p->valor}} </td>
            <td> {{ $p->descricao}} </td>
            <td> {{ $p->quantidade}} </td>
            <td>
            	<a href="/produtos/mostra/{{ $p->id }}">
            		<span class="large material-icons">search</span>
            	</a>
            </td>
		</tr>
	@endforeach
	</table>

@if(old('nome'))
	Produto {{old('nome')}} adicionado com sucesso!!
@endif

@stop