<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $produtos = DB::table('produtos')
        ->join('categorias', 'categorias.id', '=', 'produtos.categoria_id')
        ->select('produtos.*','categorias.nome AS categoriaNome')
        ->paginate(5);

        return view('produto', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriaItens = Categoria::all();
        return view('newProduto',compact('categoriaItens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produto;
        $produtos->nome = $request->input('nome');
        $produtos->preco = $request->input('preco');
        $produtos->quantidade = $request->input('quantidade');
        $produtos->categoria_id = $request->input('categoria_id');
        $produtos->save();
        return redirect('/produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productViewUpdate = Produto::find($id);
        $categoriaViewUpdate = Categoria::all();
        return view('produtoUpdate',compact('productViewUpdate','categoriaViewUpdate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $productUpdate = Produto::find($id);
        $productUpdate->nome = $request->input('nome');
        $productUpdate->preco = $request->input('preco');
        $productUpdate->quantidade = $request->input('quantidade');
        $productUpdate->categoria_id = $request->input('categoria_id');
        $productUpdate->save();
        return redirect('/produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productDestroy = Produto::find($id);
        $productDestroy->delete();
        return redirect('/produto');
    }
}
