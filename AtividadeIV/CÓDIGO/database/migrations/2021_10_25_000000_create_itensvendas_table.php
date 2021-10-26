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
            $table->int('quantidade', 30);
            $table->numeric('valor_unitario',30);
           
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
