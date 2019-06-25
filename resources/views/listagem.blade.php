@extends('principal')

@section('conteudo')
	<h1>Listagem de produtos</h1>
	<table class="table table-bordered ">
		<tr class="table-active">
			<td>NOME</td>
            <td>VALOR</td>
            <td>DESCRIÇÃO</td>
            <td>TAMANHO</td>
            <td>QUANTIDADE</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
		@foreach ($produtos as $p)
		<tr class="{{ $p->quantidade <=1 ? 'alert-danger' : ''}}">
			<td> {{ $p->nome}} </td>
            <td> {{ $p->valor}} </td>
            <td> {{ $p->descricao}} </td>
            <td> {{ $p->tamanho}} </td>
            <td> {{ $p->quantidade}} </td>
            <td>
            	<a href="/produtos/mostra/{{ $p->id }}">
            		<span class="large material-icons">search</span>
            	</a>
            </td>
            <td>
            	<a href="/produtos/recupera/{{ $p->id }}">
            		<span class="large material-icons">update</span>
            	</a>
            </td>
            <td>
            	<a href="/produtos/excluir/{{ $p->id }}">
            		<span class="large material-icons">delete_forrever</span>
            	</a>
            </td>
		</tr>
	@endforeach
	</table>

@if(old('nome'))
	Produto {{old('nome')}} adicionado com sucesso!!
@endif

@stop