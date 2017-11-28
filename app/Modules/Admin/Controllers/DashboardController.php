<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\LaravelAnalytics\LaravelAnalytics;
use Spatie\LaravelAnalytics\Period;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class DashboardController extends Controller {

    protected $ga;

    public function __construct(LaravelAnalytics $ga){
        $this->ga = $ga;
    }

    public function index(Request $request)
    {
        $metric = 'ga:pageviews, ga:users';
        $dataAnalytic = [
            'filters' => 'ga:pagePath=~^/duhoche2018/',
            'dimensions' => 'ga:date',
            'metrics' => 'ga:pageviews, ga:users',
        ];

        if($request->ajax()){
            if($request->has('week')){
                $startDate = Carbon::now()->subWeek()->startOfWeek();
                $endDate = Carbon::now();
                $rs = $this->ga->performQuery($startDate, $endDate, $metric,$dataAnalytic);
            }else{
                $from = $request->input('from');
                $to = $request->input('to');

                $start_d = Carbon::createFromFormat('d-m-Y', $from);
                $to_d = Carbon::createFromFormat('d-m-Y', $to);
                $rs = $this->ga->performQuery($start_d, $to_d, $metric,$dataAnalytic);
            }
            $data_analytic = [];
            foreach($rs->rows as $item){
                $data_analytic [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[2], 'pageviews' => $item[1] ];
            }
            $data =  new Collection($data_analytic);
            return view('Admin::ajax.ajaxChart', compact('data'))->render();
        }else{
//            $startDate = Carbon::now()->subWeek()->startOfWeek();
            $startDate = Carbon::createFromFormat('d-m-Y', '25-11-2017');
            $endDate = Carbon::now();
            $rs = $this->ga->performQuery($startDate, $endDate,$metric ,$dataAnalytic);
            $data_analytic = [];
            foreach($rs->rows as $item){
                $data_analytic [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[2], 'pageviews' => $item[1] ];
            }
            $data =  new Collection($data_analytic);
            $total_pageviews = $rs->totalsForAllResults['ga:pageviews'];
            $total_users = $rs->totalsForAllResults['ga:users'];
            return view('Admin::pages.dashboard.index', compact('data','total_pageviews', 'total_users'));
        }


    }



}
