<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PromotionController extends Controller {

	public function index()
    {
        return view('Client::pages.promotion.index');
    }

}
