<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\CountryRepository;
use App\Repositories\CourseRepository;

class CourseController extends Controller {

    protected $country;
    protected $course;

    public function __construct(CountryRepository $country, CourseRepository $course)
    {
        $this->country = $country;
        $this->course = $course;
    }

    public function country($slug)
    {
        if($slug){
            $country = $this->country->findByField("slug",$slug,['id','title','slug'],['courses'])->first();
            $course = $country->courses()->get(['title', 'slug', 'age', 'time', 'img_url']);
            return view("Client::pages.course.country", compact('country', 'course'));
        }
    }
	public function course($slug, $slugCourse)
    {
        if($slug && $slugCourse){
            $country = $this->country->findByField('slug', $slug,['title','id'])->first();
            $course = $this->course->findByField('slug', $slugCourse, ['title', 'description', 'content', 'content_column2','img_url', 'code', 'schedule'])->first();
            return view("Client::pages.course.course", compact('country', 'course'));
        }

    }

}
