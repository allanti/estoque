<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
class ProdutoController extends Controller{

	public function lista(){
		$produtos = Produto::all();
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra(){
		$id = Request::route('id');
		$produto = Produto::find($id);
		return view('detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('formulario');
	}

	public function adiciona(){

		$produto = new Produto();
		$produto->nome = Request::input('nome');
		$produto->quantidade = Request::input('quantidade');
		$produto->valor = Request::input('valor');
		$produto->descricao = Request::input('descricao');

		$produto->save();
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

	public function excluir(){

		$id = Request::route('id');

		DB::delete('delete from produtos where id = ?', [$id]);

		return redirect('/produtos');
	}
}