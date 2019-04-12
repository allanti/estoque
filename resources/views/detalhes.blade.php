@extends('principal')

@section('conteudo')
	<h1>Detalhes do {{ $p->nome }}</h1>
	<ul>
	    <li>
	    	Valor: {{ $p->descricao }}
	    </li>
	    <li>
	    	Descrição: {{ $p->descricao }}
	    </li>
	    <li>
	    	Descrição: {{ $p->descricao }}
	    </li>
	    <li></li>
	</ul>
@stop