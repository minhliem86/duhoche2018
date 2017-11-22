<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CourseController extends Controller {



    public function country($slug)
    {
        return view("Client::pages.course.country");
    }
	public function course($slug, $slugCourse)
    {
        return view("Client::pages.course.course");
    }

}
