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
            $country = $this->country->findByField("slug",$slug,['id','title','slug',"m_keywords", "m_description","m_img", "video_url"],['courses'])->first();
            $course = $country->courses()->get(['title', 'slug', 'age', 'time', 'img_url']);
            $banner_view = view("Client::layouts.banner_country", compact('country'))->render();
            return view("Client::pages.course.country", compact('country', 'course','banner_view'));
        }
    }
	public function course($slug, $slugCourse)
    {
        if($slug && $slugCourse){
            $country = $this->country->findByField('slug', $slug,['title','id'])->first();
            $course = $this->course->findByField('slug', $slugCourse, ['title', 'description', 'content', 'content_column2','img_url', 'img_map', 'code', 'schedule', "m_keywords", "m_description", "m_img", "age", "time"])->first();
            return view("Client::pages.course.course", compact('country', 'course'));
        }

    }

}
