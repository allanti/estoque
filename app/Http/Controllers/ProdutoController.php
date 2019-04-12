<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
class ProdutoController extends Controller{

	public function lista(){
		$produtos = DB::select('select * from produtos');
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra(){
		$id = Request::route('id');
		$produto = DB::select('select * from produtos where id = ?', [$id]);
		return view('detalhes')->with('p', $produto[0]);
	}

	public function novo(){
		return view('formulario');
	}

	public function adiciona(){

		$nome = Request::input('nome');
		$quantidade = Request::input('quantidade');
		$valor = Request::input('valor');
		$descricao = Request::input('descricao');

		DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',
			array($nome, $quantidade, $valor, $descricao));

		return redirect('/produtos')->withInput();
	}

	public function recupera(){

		$id = Request::route('id');
		$produto = DB::select('select * from produtos where id = ?', [$id]);
		return view('atualiza')->with('p', $produto[0]);
	}

	public function atualiza(){

		$id = Request::input('id');
		$nome = Request::input('nome');
		$quantidade = Request::input('quantidade');
		$valor = Request::input('valor');
		$descricao = Request::input('descricao');

		DB::update('update produtos set nome = ?, quantidade = ?, valor = ?, descricao = ? where id = ?', array($nome, $quantidade, $valor, $descricao, $id));

		return redirect('/produtos');
	}
}