<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PromotionRepository;
use App\Repositories\TestimonialRepository;

use Illuminate\Http\Request;

class HomeController extends Controller {

    protected $promotion;
    protected $testimonial;

    public function __construct(PromotionRepository $promotion, TestimonialRepository $testimonial)
    {
        $this->promotion = $promotion;
        $this->testimonial = $testimonial;
    }

    public function index()
    {
        $promotion = $this->promotion->getHomePage(['img_homepage', 'title'],4);
        $testimonial = $this->testimonial->getHomePage(['slug', 'img_url', 'author', 'description'],'4');
        return view('Client::pages.home.index', compact('promotion', 'testimonial'));
    }

}
