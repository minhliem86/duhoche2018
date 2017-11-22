<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

	protected $fillable = ['title', "slug", "description", "img_url", "img_homepage", "order", "status"];

}
