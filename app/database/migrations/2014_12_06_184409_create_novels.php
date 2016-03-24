<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('novels', function($theNovel)
		{
			$theNovel->increments('id');
			$theNovel->string('title');
			$theNovel->string('author');
			$theNovel->integer('year');
			$theNovel->text('synopsis');
			$theNovel->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('novels');
	}

}
