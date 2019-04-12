@extends('principal')

@section('conteudo')
	<h1>Detalhes do {{ $p->nome }}</h1>
	<ul>
	    <li>
	    	Valor: {{ $p->valor }}
	    </li>
	    <li>
	    	Quantidade: {{ $p->quantidade }}
	    </li>
	    <li>
	    	Descrição: {{ $p->descricao }}
	    </li>
	</ul>
@stop