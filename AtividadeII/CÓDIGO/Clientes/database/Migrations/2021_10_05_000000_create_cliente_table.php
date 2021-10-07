<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;



class CreateClientesTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('nome', 60);
            $table->string('endereco', 60);
           $table->float('debito');
            

        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
?>
