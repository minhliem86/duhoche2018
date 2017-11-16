<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_videos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('img_url')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('order')->default(1);
            $table->boolean('status')->default(1);
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
		Schema::drop('course_videos');
	}

}
