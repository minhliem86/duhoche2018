<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_images', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('img_url')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->integer('order')->default(1);
            $table->boolean('status')->default(1);
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_images');
	}

}
