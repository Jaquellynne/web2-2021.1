<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProdutocompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtocompra', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->float('valorUnitario', 10, 0)->nullable()->default(0);
			$table->integer('quantidade')->nullable()->default(0);
			$table->float('valorTotal', 10, 0)->nullable()->default(0);

			$table->unsignedBigInteger('idProduto');
			$table->foreign('idProduto')->references('id')->on('produto');

			$table->unsignedBigInteger('idCompra');
			$table->foreign('idCompra')->references('id')->on('compra');

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
		Schema::drop('produtocompra');
	}

}
