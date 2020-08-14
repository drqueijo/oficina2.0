<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//model da tabela cadastro
class Cadastro extends Model
{
    protected $fillable = ['nome_cliente', 'nome_vendedor','created_at','descricao','preco'];
    protected $guarded = ['id', 'updated_at'];
    protected $table = 'cadastro';
}
