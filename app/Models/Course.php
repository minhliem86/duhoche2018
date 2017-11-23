<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	public $table = 'courses';

    protected $fillable = ['title','slug','description', "content", "content_column2", "country_id", "age", "time", "schedule", "code", 'img_url' ,'order','m_keywords','m_description', 'm_img'];

    public function countries()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
}
