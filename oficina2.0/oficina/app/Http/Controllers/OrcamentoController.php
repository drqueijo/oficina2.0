<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Model\OrcamentoModel;
use App\Models\OrcamentoModel as ModelsOrcamentoModel;


class OrcamentoController extends Controller
{   
        

        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamentos = ModelsOrcamentoModel::all()->sortBy('vendedor');
        return view('index')->with('orcamento',$orcamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $orcamentos = ModelsOrcamentoModel::create([
            'cliente'=>$request->cliente,
            'vendedor'=>$request->vendedor,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor
            
        ]);

        if($cad){
            return redirect('orcamentos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orcamentos = ModelsOrcamentoModel::find($id);
        return view('show')->with('orcamento',$orcamentos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
