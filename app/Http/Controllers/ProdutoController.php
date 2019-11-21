<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use \App\Produto;
use \App\Http\Requests\ProdutosRequest;



class ProdutoController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

	
	public function lista()
	{
		$produtos = Produto::all();
		
		return view('produto.listagem')->with('produtos', $produtos);				
	}

	public function mostra($id)
	{
		$produto = Produto::find($id);

		if(empty($produto))
			return "Esse produto não existe";

		return view('produto.detalhes')->with('p', $produto);
	}

	public function novo()
	{
		return view('produto.adiciona');
	}

	public function adiciona(ProdutosRequest $request)
	{
		Produto::create($request->all());

		return redirect()->action('ProdutoController@Lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$produtos = Produto::all();

		return response()->json($produtos);
	}

	public function remove($id)
	{
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@Lista');
	}

	public function edita($id)
	{
		return view('produto.edita')->with('p', Produto::findOrFail($id));	
	}

	public function atualiza($id, ProdutosRequest $request)
	{
		$produto = Produto::find($id);
		$produto->update($request->all());

		return redirect()->action('ProdutoController@Lista');
	}



}




