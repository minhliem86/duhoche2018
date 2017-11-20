<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

	public $table = "media";

	protected $fillable = ['mediable_id', 'mediable_type','type','img_url','text_caption'];

	public function mediable()
    {
        return $this->morphTo();
    }
}
