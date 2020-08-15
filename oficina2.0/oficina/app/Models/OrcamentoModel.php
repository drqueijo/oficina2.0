<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrcamentoModel extends Model
{
    protected $table='orcamento';
    protected $fillable=['cliente', 'vendedor', 'descricao','valor'];
}
