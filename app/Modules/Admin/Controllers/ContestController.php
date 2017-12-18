<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ContestRepository;
use Carbon\Carbon;
use Excel;

class ContestController extends Controller {

	protected $contest;

	public function __construct(ContestRepository $contest)
    {
        $this->contest = $contest;
    }

    public function index()
    {
        $data = $this->contest->getDataJoinCity(['contests.id as id', 'contests.fullname as fullname','contests.dob as dob','contests.phone as phone','cities.name as name_city', 'contests.quocgia as quocgia', "contests.created_at as create_date"])->paginate(10);
        $data->setPath('');
        return view('Admin::pages.contest.index', compact('data'));
    }

    public function downloadAll()
    {
        $data = $this->contest->collectDataCity();
        $filename = 'Register_Contest_'.Carbon::now()->toDateString();
        Excel::create($filename, function ($excel) use ($data) {
            $excel->sheet('Register Data', function ($sheet) use ($data){
                $sheet->setHeight(1,50);
                $sheet->setWidth([
                    'A'     =>  15,
                    'B'     =>  15,
                    'C'     =>  15,
                    'D'     =>  15,
                    'E'     =>  15,
                    'F'     =>  15,
                    'G'     =>  15,
                    'H'     =>  15,
                    'I'     =>  15,
                    'J'     =>  15,
                ]);
                $sheet->cell('A1:J1', function($cell){
                    $cell->setBackground('#85caea')->setAlignment('center')->setValignment('center')->setBorder('solid','solid','solid','solid')->setFontColor('#ffffff')->setFontWeight('bold');
                });
                $header = ['No', 'Name', 'DOB', 'Email', 'Phone', 'City', 'School', 'Country', 'Register Date', 'Profile'];
                $sheet->appendRow($header);
                $sheet->fromModel($data);
            });
        })->export('xls');

    }

}
