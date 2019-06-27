<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
use App\Categoria;
use App\Http\Requests\ProdutoRequest;
class ProdutoController extends Controller{

	public function __construct()
    {
        $this->middleware('autorizador');
    }

	public function lista(){
		$produtos = Produto::all();
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra($id){
		$produto = Produto::find($id);
		return view('detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('formulario')->with('categorias', Categorias::all());
	}

	public function adiciona(ProdutoRequest $request){
		Produto::create($request->all());
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