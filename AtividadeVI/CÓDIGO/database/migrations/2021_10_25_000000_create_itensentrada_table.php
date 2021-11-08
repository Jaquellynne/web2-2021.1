<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateItensEntradaTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('itensentrada', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('nome_itens_entrada');
            $table->string('descricao');
            $table->unsignedBigInteger('entrada_id');
            $table->foreign('entrada_id')->references('id')->on('entrada');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto');

        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensentrada');
    }
}
?>
