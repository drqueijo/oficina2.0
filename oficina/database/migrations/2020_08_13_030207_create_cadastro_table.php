<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroTable extends Migration
{
    /**
     * Cria uma tabela cadastro
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->increments("id");
            $table-> string ("nome_cliente", 30);
            $table-> string ("nome_vendedor", 30);
            $table-> string ("descricao", 30)->nullable();
            $table-> decimal ("preco", 6,2);
            $table-> timestamps ();
            $table->softDeletes();
            
        });
    }

    /**
     * Exclui se ja existir uma tabela cadastro
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro');
    }
}
