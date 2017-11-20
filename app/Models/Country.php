<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    public $table = 'countries';

    protected $fillable = ['title','slug','description','img_url' ,'order','m_keywords','m_description', 'm_img', 'video_url'];

    public function media()
    {
        return $this->morphMany('App\Models\Media', 'mediable');
    }

}
