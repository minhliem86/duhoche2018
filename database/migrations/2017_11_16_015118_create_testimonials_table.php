<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimonials', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('author')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('img_url')->nullable();
            $table->string('img_avatar')->nullable();
            $table->integer('order')->default(1);
            $table->boolean('status')->default(1);
            $table->string('m_keywords')->nullable();
            $table->text('m_description')->nullable();
            $table->string('m_img')->nullable();
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
		Schema::drop('testimonials');
	}

}
