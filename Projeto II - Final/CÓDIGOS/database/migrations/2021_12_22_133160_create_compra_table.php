<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compra', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('quantidade')->nullable()->default(0);
			$table->float('valorTotal', 10, 0)->nullable()->default(0);
			$table->string('notaFiscal', 44)->nullable();

			$table->unsignedBigInteger('idFornecedor');
			$table->foreign('idFornecedor')->references('id')->on('fornecedor');
			
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
		Schema::drop('compra');
	}

}
