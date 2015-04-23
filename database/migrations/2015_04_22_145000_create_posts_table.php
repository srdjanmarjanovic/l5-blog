<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
			'posts', function ($t) {
				$t->increments('id')->unsigned();
				$t->string('title', 200);
				$t->string('url', 200)->unique();
				$t->boolean('status');
				$t->integer('type')->unsigned();
				$t->foreign('type')->references('id')->on('post_types');
				$t->text('body');
				$t->timestamps();
			}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
