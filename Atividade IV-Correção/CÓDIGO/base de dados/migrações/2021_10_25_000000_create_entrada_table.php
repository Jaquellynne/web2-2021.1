<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateEntradaTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->date('data_entrada');
            $table->date('data_saida');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedor');

        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada');
    }
}
?>
