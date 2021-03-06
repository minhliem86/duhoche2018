<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('content_column2')->nullable();
            $table->string('code')->nullable();
            $table->string('age')->nullable();
            $table->string('time')->nullable();
            $table->text('schedule')->nullable();
            $table->string('img_url')->nullable();
            $table->integer('order')->default(1);
            $table->boolean('status')->default(1);
            $table->string('m_keywords')->nullable();
            $table->text('m_description')->nullable();
            $table->string('m_img')->nullable();
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
		Schema::drop('courses');
	}

}
