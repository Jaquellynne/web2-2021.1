<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProdutopromocaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtopromocao', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->float('valorDesconto', 10, 0);

			$table->unsignedBigInteger('idProduto');
			$table->foreign('idProduto')->references('id')->on('produto');

			$table->unsignedBigInteger('idPromocao');
			$table->foreign('idPromocao')->references('id')->on('promocao');

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
		Schema::drop('produtopromocao');
	}

}
