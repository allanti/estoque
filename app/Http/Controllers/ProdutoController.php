<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
use Illuminate\Support\Facades\Validator;
class ProdutoController extends Controller{

	public function lista(){
		$produtos = Produto::all();
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra($id){
		$produto = Produto::find($id);
		return view('detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('formulario');
	}

	public function adiciona(){

		$validator = Validator::make(
			['nome' => Request::input('nome')],
			['nome' => 'required|min:3']
		);

		if($validator->fails()) {
			return redirect('/produtos/novo');
		}

		Produto::create(Request::all());
		return redirect('/produtos')->withInput();
	}

	public function recupera($id){

		$produto = Produto::find($id);
		return view('atualiza')->with('p', $produto);
	}

	public function atualiza(){

		$dataForm = Request::all();
		$produto = Produto::find($dataForm['id']);
		$produto->update($dataForm);
		return redirect('/produtos');
	}

	public function excluir($id){

		$produto = Produto::find($id);
		$produto->delete();
		return redirect('/produtos');
	}
}