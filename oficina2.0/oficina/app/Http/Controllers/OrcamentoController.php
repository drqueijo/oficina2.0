<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoRequest;
use Illuminate\Http\Request;
use APP\Model\OrcamentoModel;
use App\Models\OrcamentoModel as ModelsOrcamentoModel;
use Illuminate\Pagination\LengthAwarePaginator;


class OrcamentoController extends Controller
{   
        

        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $orcamentos = ModelsOrcamentoModel::paginate(5);
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
    public function store(OrcamentoRequest $request)
    {
        $cad = $orcamentos = ModelsOrcamentoModel::create([
            'cliente'=>$request->cliente,
            'vendedor'=>$request->vendedor,
            'descricao'=>$request->descricao,
            'valor'=>(float)$request->valor
            
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
        $orcamentos = ModelsOrcamentoModel::find($id);
        return view ('create')->with('orcamento',$orcamentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrcamentoRequest $request, $id)
    {
        $orcamentos = ModelsOrcamentoModel::where('id', $id)->update([
            'cliente'=>$request->cliente,
            'vendedor'=>$request->vendedor,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            //'updated_at'=>'2020-01-01'
        ]);

        
        return redirect('orcamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $orcamentos = ModelsOrcamentoModel::destroy($id);

        return($del)?"sim":"não";
    }
}
