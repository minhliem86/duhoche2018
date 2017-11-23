<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\TestimonialRepository;
use App\Repositories\CourseRepository;

class TestimonialController extends Controller {

    protected $testimonial;
    protected $course;

    public function __construct(TestimonialRepository $testimonial, CourseRepository $course)
    {
        $this->testimonial = $testimonial;
        $this->course = $course;
    }

    public function index()
    {
        $testimonial = $this->testimonial->all(['id', 'author', 'slug', 'description', 'img_avatar', 'img_url']);
        $mobile_detect = new \Mobile_Detect;
        return view('Client::pages.testimonial.index', compact('testimonial','mobile_detect'));
    }

    public function detail($slug)
    {
        if($slug){
            $testmonial_detail = $this->testimonial->findByField('slug', $slug,['img_url', 'author', 'description' ])->first();
            $testimonial = $this->testimonial->findWhereNotIn('slug', [$slug], ['img_avatar', 'author', 'slug', 'description']);
            $random_country = $this->course->randomCourse(['id', 'title', 'slug','country_id'], 5, ['countries']);
            return view('Client::pages.testimonial.detail', compact('testimonial', 'testmonial_detail', 'random_country'));
        }else{
            return redirect()->route('testimonial');
        }
    }

}
