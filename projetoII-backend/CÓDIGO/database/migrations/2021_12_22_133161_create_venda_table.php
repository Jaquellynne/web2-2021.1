<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venda', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('quantidade')->nullable()->default(0);
			$table->float('valorTotal', 10, 0)->nullable()->default(0);
			$table->string('notaFiscal', 44)->nullable();

			$table->unsignedBigInteger('idCliente');
			$table->foreign('idCliente')->references('id')->on('cliente');

			$table->unsignedBigInteger('idFuncionario');
			$table->foreign('idFuncionario')->references('id')->on('funcionario');

			$table->unsignedBigInteger('idFormaPagamento');
			$table->foreign('idFormaPagamento')->references('id')->on('formapagamento');

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
		Schema::drop('venda');
	}

}
