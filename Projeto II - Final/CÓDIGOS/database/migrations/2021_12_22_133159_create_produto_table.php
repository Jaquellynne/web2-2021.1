<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('nome', 50);
			$table->integer('ano')->nullable()->default(0);
			$table->string('cor', 50);
			$table->string('marca', 50);
			$table->integer('quantidade')->nullable()->default(0);
			$table->float('valorVenda', 10, 0)->nullable()->default(0);
			$table->float('valorCompra', 10, 0)->nullable()->default(0);

			$table->unsignedBigInteger('idCategoria');
			$table->foreign('idCategoria')->references('id')->on('categoria');

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
		Schema::drop('produto');
	}

}
