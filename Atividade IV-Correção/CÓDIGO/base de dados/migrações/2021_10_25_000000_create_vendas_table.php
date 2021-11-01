<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateVendasTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table){
            $table->id();
            $table->numeric('valor_total', 30);
            $table->numeric('valor_troco',30);
            $table->numeric('desconto',30);

        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
?>
