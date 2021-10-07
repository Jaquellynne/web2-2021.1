<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateFornecedorTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table){
            $table->id();
            $table->string('nome', 60);
            $table->string('CNPJ',60);
            $table->string('email',60);

        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor');
    }
}
?>
