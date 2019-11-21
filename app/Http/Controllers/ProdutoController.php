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

	public function mostra(Produto $produto)
	{

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

	public function remove(Produto $produto)
	{
		$produto->delete();

		return redirect()->action('ProdutoController@Lista');
	}

	public function edita(Produto $produto)
	{

		return view('produto.edita')->with('p', $produto);	
	}

	public function atualiza(Produto $produto, ProdutosRequest $request)
	{	
		$produto->update($request->all());

		return redirect()->action('ProdutoController@Lista');
	}



}




