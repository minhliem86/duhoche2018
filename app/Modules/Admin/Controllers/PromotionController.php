<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\PromotionRepository;
use yajra\Datatables\Datatables;
use App\Models\Media;

class promotionController extends Controller {

    protected $promotion;

    public function __construct(PromotionRepository $promotion)
    {
        $this->promotion = $promotion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('Admin::pages.promotion.index');
    }

    public function getAjax(Request $request)
    {
        $column = ["id",'title', "img_url", "order", "status"];
        $data = $this->promotion->query($column);
        $datatable = Datatables::of($data)

            ->editColumn('img_url',function($data){
                return '<img src=" '.$data->img_url.' " width="80" class="img-responsive" />';
            })
            ->addColumn('action', function($data) {
                $route_edit = route('admin.promotion.edit',$data->id);
                $route_destroy = route('admin.promotion.destroy', $data->id);
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
                    $query->where('author', 'like', "%{$request->input('name')}%");
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
        return view('Admin::pages.promotion.create');
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
        $order = $this->promotion->getOrder();
        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'description' => $request->input('description'),
            'img_url' => $img_url,
            'order' => $order,
        ];
        $promotion = $this->promotion->create($data);

        return redirect()->route('admin.promotion.index')->with('success','Created !');
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
        $inst = $this->promotion->find($id,['*']);
        return view('Admin::pages.promotion.edit', compact('inst'));
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
            'img_url' => $img_url,
            'order' => $request->input('order'),
            'status' => $request->input('status'),
        ];
        $promotion = $this->promotion->update($data, $id);

        return redirect()->route('admin.promotion.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->promotion->delete($id);
        return redirect()->route('admin.promotion.index')->with('success', 'Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->promotion->deleteAll($data);
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
                $obj = $this->promotion->find($k);
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
            $cate = $this->promotion->find($id);
            $cate->status = $value;
            $cate->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }

}
