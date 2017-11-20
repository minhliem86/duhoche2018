<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

	protected $fillable = ["author", "slug", "title", "description", "img_url", "img_avatar" , "order", "status", "m_keywords", "m_description", "m_img"];

}
