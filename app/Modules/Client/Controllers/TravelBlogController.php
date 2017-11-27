<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class TravelBlogController extends Controller {

	public function getTravelblog()
    {
        $country = DB::connection('mysql2')->table('countries')->select('name','slug','img_avatar')->where('status',1)->get();
        return view('Client::pages.travelblog.country', compact('country'));
    }

    public function getCountry($slug)
    {
        $country_name = DB::connection('mysql2')->table('countries')->where('slug',$slug)->first();
        $country = DB::connection('mysql2')->table('tours')
            ->select('title', 'img_avatar', 'tour_code')
            ->where('country_id', $country_name->id)
            ->where('status',1)
            ->get();
        return view('Client::pages.travelblog.course', compact('country_name','country'));
    }

    public function getCourse($tourcode)
    {
        $course_name = DB::connection('mysql2')->table('tours')->where('tour_code',$tourcode)->select('id','title','tour_code')->first();
        $album = DB::connection('mysql2')->table('albums')
            ->select('title', 'img_url', 'slug', 'id')
            ->where('tour_id', $course_name->id)
            ->where('status',1)
            ->get();
        return view('Client::pages.travelblog.album', compact('course_name', 'album'));
    }

    public function getAlbum($tourcode, $album_id)
    {
        $album_name = DB::connection('mysql2')->table('albums')->where('id',$album_id)->first();
        $photo = DB::connection('mysql2')->table('photos')
            ->select('img_url','thumbnail_url','title')
            ->where('status',1)
            ->where('album_id', $album_id)
            ->get();
        if(count($photo)){
            return view('Client::pages.travelblog.photo', compact('album_name','photo'));
        }else{
            return redirect()->back();
        }

    }

}
