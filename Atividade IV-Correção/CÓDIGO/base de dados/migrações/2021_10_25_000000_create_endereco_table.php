<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateEnderecoTable extends Migration
{

    /** 
    *Run the migrations.
    *@return void 
    */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table){
            $table->id();
            $table->string('logradouro', 60);
            $table->string('bairro',60);
            $table->string('cidade',60);
            $table->string('uf', 20);

        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
?>
