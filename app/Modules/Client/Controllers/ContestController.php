<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ContestRepository;
use Validator;
use Carbon\Carbon;
use Session;

class ContestController extends Controller {

	protected $contest;
	protected $_path = 'public/contest';

	public function __construct( ContestRepository $contest)
    {
        $this->contest = $contest;
    }

    public function index()
    {
        return view('Client::pages.landingpage.index');
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'fullname' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone' => 'required|digits_between:7,11',
            'city'=>'required',
            'quocgia' => 'required',
            'school' => 'required',
            'file' => 'required|max:5050|mimes:doc,docx,pdf'
        ];
        $messages = [
            'fullname.required' => 'Vui lòng nhập tên',
            'dob.required' => 'Vui lòng chọn ngày tháng năm sinh',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập định dạng email',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.digits_between' => 'Vui lòng nhập định dạng số/không dấu cách',
            'city.required' => 'Vui lòng chọn thành phố',
            'file.required' => 'Vui lòng chọn file Upload',
            'file.max' => 'Vui lòng Upload file < 5MB',
            'file.mimes' => 'Vui lòng Upload định dạng file: word, pdf',
            'school.required' => 'Vui lòng chọn tên Trường bạn đang học',
        ];
        $valid = Validator::make($request->all(),$rules, $messages);
        if($valid->fails()){
            return redirect()->back()->withInput()->withErrors($valid->errors());
        }else{
            $file = $request->file('file');
            $path = $this->_path . '/' . \LP_lib::unicodenospace($request->input('fullname')) . '_' . time() ;
            $filename = \LP_lib::unicodenospace($request->input('fullname'));
            $contest = $this->_uploadContest($path, $file,$filename);
            $data = [
                'fullname' => $request->input('fullname'),
                'dob' => Carbon::createFromFormat('d/m/Y',$request->get('dob')),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'city' => $request->input('city'),
                'quocgia' => $request->input('quocgia'),
                'school' => $request->input('school'),
                'user_post' => asset($contest),
            ];
            $reg = $this->contest->create($data);
            return redirect()->route('contest.thankyou')->with(['success'=>'done']);
        }
    }

    public function thankyou()
    {
        if(Session::has('success')){
            return view('Client::pages.landingpage.thankyou');
        }else{
            return redirect()->back();
        }
    }

    protected function _uploadContest($path, $file, $filename)
    {
        $time = time();
        $extension = $file->getClientOriginalExtension();
        $fileUpload = $time.'_'.$filename . '.' .$extension;
        $file->move($path,$fileUpload);
        return $path . '/' . $fileUpload;
    }
}
