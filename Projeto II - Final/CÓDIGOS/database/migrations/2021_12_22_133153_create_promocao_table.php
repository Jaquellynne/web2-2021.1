<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePromocaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promocao', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('nome', 50);
			$table->date('dataInicio');
			$table->date('dataFim')->nullable();
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
		Schema::drop('promocao');
	}

}
