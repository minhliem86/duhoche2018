<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\PromotionRepository;

class PromotionController extends Controller {

    protected $promotion;

    public function __construct(PromotionRepository $promotion)
    {
        $this->promotion = $promotion;
    }

    public function index()
    {
        $promotion = $this->promotion->getHomePage(['img_url', 'title', 'description'], 4);
        return view('Client::pages.promotion.index', compact('promotion'));
    }

}
