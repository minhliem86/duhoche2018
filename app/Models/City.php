<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    public $connection = 'mysql3';

	public $table = 'city';

	protected $guarded = ['id'];

}
