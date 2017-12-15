<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model {

	public $table = 'contests';

	protected $guarded = ['id'];

	public function cities()
    {
        return $this->belongsTo('App\Models\City', 'city');
    }

}
