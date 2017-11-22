<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\TestimonialRepository;

class TestimonialController extends Controller {

    protected $testimonial;

    public function __construct(TestimonialRepository $testimonial)
    {
        $this->testimonial = $testimonial;
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
            dd($testmonial_detail);
            return view('Client::pages.testimonial.detail');
        }else{
            return redirect()->route('testimonial');
        }
    }

}
