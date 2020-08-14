<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Cadastro;

class CadastroController extends Controller
{
    public function index() {
        $cadastro = Cadastro::all();
        $total = Cadastro::all()->count();
        return view('list-cadastro', compact('cadastro', 'total'));
    }

    public function create() {
        return view('include-produto');
    }

    public function store(Request $request) {
        $product = new Cadastro;
        $product->nome_cliente = $request->nome_cliente;
        $product->nome_vendedor = $request->nome_vendedor;
        $product->descricao = $request->descricao;
        $product->preco = $request->preco;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Cadastro criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product = Cadastro::findOrFail($id);
        return view('alter-produto', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Cadastro::findOrFail($id); 
        $product->nome_cliente = $request->nome_cliente;
        $product->nome_vendedor = $request->nome_vendedor;
        $product->descricao = $request->descricao;
        $product->preco = $request->preco;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Cadastro alterado com sucesso!');
    }

    public function destroy($id) {
        $product = Cadastro::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Cadastro excluído com sucesso!');
    }

}
