<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionario', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('nome', 50);
			$table->integer('nivelAcesso');
			$table->string('cpf', 14);
			$table->string('endereco', 80)->nullable();
			$table->string('telefone', 15)->nullable();
			$table->date('dataNascimento')->nullable();
			$table->string('usuario', 20)->nullable();
			$table->text('senha')->nullable();
			$table->string('email', 50)->nullable();
			$table->timestamp('created')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('edited')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('funcionario');
	}

}
