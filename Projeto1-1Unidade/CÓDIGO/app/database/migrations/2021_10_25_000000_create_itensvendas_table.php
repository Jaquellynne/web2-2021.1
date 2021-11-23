<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateItensVendasTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('ItensVendas', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->int('quantidade', 30);
            $table->numeric('valor_unitario',30);
            $table->unsignedBigInteger('vendas_id');
            $table->foreign('vendas_id')->references('id')->on('vendas');
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
        Schema::dropIfExists('ItensVendas');
    }
}
?>
