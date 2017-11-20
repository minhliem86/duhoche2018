<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\CountryRepository;
use yajra\Datatables\Datatables;
use App\Models\Media;

class CountryController extends Controller {

    protected $country;

    public function __construct(CountryRepository $country)
    {
        $this->country = $country;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('Admin::pages.country.index');
	}

	public function getAjax(Request $request)
    {
        $column = ["id",'title', 'img_url', 'order', 'status'];
        $data = $this->country->query($column);
        $datatable = Datatables::of($data)

            ->editColumn('img_url',function($data){
                return '<img src=" '.$data->img_url.' " width="80" class="img-responsive" />';
            })
            ->addColumn('action', function($data) {
                $route_edit = route('admin.country.edit',$data->id);
                $route_destroy = route('admin.country.destroy', $data->id);
                return view('Admin::datatables.action', compact('data', 'route_edit', 'route_destroy'))->render();
            })
            ->editColumn('order', function($data) {
                return "<input type='text' name='order' class='form-control' data-id= '" . $data->id . "' value= '" . $data->order . "' />";
            })
            ->editColumn('status', function($data){
                $status = $data->status ? 'checked' : '';
                $data_id = $data->id;
                return '
             <label class="toggle">
                <input type="checkbox" name="status" value="1" ' . $status . '   data-id ="' . $data_id . '">
                <span class="handle"></span>
              </label>
          ';
            })
            ->filter(function($query) use ($request) {
                if ($request->has('name')) {
                    $query->where('title', 'like', "%{$request->input('name')}%");
                }
            });
        return $datatable->make(true);

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Admin::pages.country.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        if($request->has('img_url')){
            $img_url = $request->input('img_url');
        }else{
            $img_url = "";
        }
        if($request->has('meta_images')){
            $meta_img = $request->input('m_img');
        }else{
            $meta_img = "";
        }
        $order = $this->country->getOrder();
        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'description' => $request->input('description'),
            'm_keywords' => $request->input('m_keywords'),
            'm_description' => $request->input('m_description'),
            'video_url' => $request->input('video_url'),
            'm_img' => $meta_img,
            'img_url' => $img_url,
            'order' => $order,
        ];
        $country = $this->country->create($data);

        if($request->has('img_banner01'))
        {
            $media = new Media();
            $media->img_url = $request->input('img_banner01');
            $country->media()->save($media);
        }

        return redirect()->route('admin.country.index')->with('success','Created !');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $inst = $this->country->find($id,['*']);
        return view('Admin::pages.country.edit', compact('inst'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        $img_url = $request->input('img_url');
        $meta_image = $request->input('m_img');

        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'description' => $request->input('description'),
            'm_keywords' => $request->input('m_keywords'),
            'm_description' => $request->input('m_description'),
            'video_url' => $request->input('video_url'),
            'm_img' => $meta_image,
            'img_url' => $img_url,
            'order' => $request->input('order'),
            'status' => $request->input('status'),
        ];
        $product = $this->country->update($data, $id);

        $media_id = $product->media->first() ? $product->media->first()->id : null;
        if($media_id){
            $media_obj = Media::find($media_id);
            $media_obj->img_url = $request->input('img_banner01');
            $media_obj->save();
        }
        return redirect()->route('admin.country.index')->with('success', 'Updated !');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->country->delete($id);
        return redirect()->route('admin.country.index')->with('success', 'Deleted !');
	}

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->country->deleteAll($data);
            return response()->json(['msg' => 'ok']);
        }
    }

    /*UPDATE ORDER*/
    public function postAjaxUpdateOrder(Request $request)
    {
        if(!$request->ajax())
        {
            abort('404', 'Not Access');
        }else{
            $data = $request->input('data');
            foreach($data as $k => $v){
                $upt  =  [
                    'order' => $v,
                ];
                $obj = $this->country->find($k);
                $obj->update($upt);
            }
            return response()->json(['msg' =>'ok', 'code'=>200], 200);
        }
    }

    /*CHANGE STATUS*/
    public function updateStatus(Request $request)
    {
        if(!$request->ajax()){
            abort('404', 'Not Access');
        }else{
            $value = $request->input('value');
            $id = $request->input('id');
            $cate = $this->country->find($id);
            $cate->status = $value;
            $cate->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }

}
