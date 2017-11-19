<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\CourseRepository;
use yajra\Datatables\Datatables;
use DB;

class CourseController extends Controller
{

    protected $course;

    public function __construct(CourseRepository $course)
    {
        $this->course = $course;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('Admin::pages.course.index');
    }

    public function getAjax(Request $request)
    {
        $data = DB::table('courses')->join('countries', 'countries.id', '=', 'courses.country_id')->select('courses.id as id ', 'courses.title as title', 'courses.img_url as img_url','courses.code as code', 'countries.title as country_title', 'courses.order as order', 'courses.status as status');
        $datatable = Datatables::of($data)
            ->editColumn('img_url', function ($data) {
                return '<img src=" ' . $data->img_url . ' " width="80" class="img-responsive" />';
            })
            ->addColumn('action', function ($data) {
                $route_edit = route('admin.course.edit', $data->id);
                $route_destroy = route('admin.course.destroy', $data->id);
                return view('Admin::datatables.action', compact('data', 'route_edit', 'route_destroy'))->render();
            })
            ->editColumn('order', function ($data) {
                return "<input type='text' name='order' class='form-control' data-id= '" . $data->id . "' value= '" . $data->order . "' />";
            })
            ->editColumn('status', function ($data) {
                $status = $data->status ? 'checked' : '';
                $data_id = $data->id;
                return '
             <label class="toggle">
                <input type="checkbox" name="status" value="1" ' . $status . '   data-id ="' . $data_id . '">
                <span class="handle"></span>
              </label>
          ';
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('name')) {
                    $query->where('courses.title', 'like', "%{$request->input('name')}%");
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
        return view('Admin::pages.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->has('img_url')) {
            $img_url = $request->input('img_url');
        } else {
            $img_url = "";
        }
        if ($request->has('meta_images')) {
            $meta_img = $request->input('m_img');
        } else {
            $meta_img = "";
        }
        $order = $this->course->getOrder();
        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'code' => $request->input('code'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'age' => $request->input('age'),
            'time' => $request->input('time'),
            'schedule' => $request->input('schedule'),
            'm_keywords' => $request->input('m_keywords'),
            'm_description' => $request->input('m_description'),
            'm_img' => $meta_img,
            'img_url' => $img_url,
            'order' => $order,
        ];
        $product = $this->course->create($data);
        return redirect()->route('admin.course.index')->with('success', 'Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $inst = $this->course->find($id, ['*']);
        return view('Admin::pages.course.edit', compact('inst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $img_url = $request->input('img_url');
        $meta_image = $request->input('m_img');
        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'code' => $request->input('code'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'age' => $request->input('age'),
            'time' => $request->input('time'),
            'schedule' => $request->input('schedule'),
            'm_keywords' => $request->input('m_keywords'),
            'm_description' => $request->input('m_description'),
            'm_img' => $meta_img,
            'img_url' => $img_url,
            'order' => $request->input('order'),
            'status' => $request->input('status'),
        ];
        $product = $this->course->update($data, $id);
        return redirect()->route('admin.course.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->course->delete($id);
        return redirect()->route('admin.course.index')->with('success', 'Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        } else {
            $data = $request->arr;
            $response = $this->course->deleteAll($data);
            return response()->json(['msg' => 'ok']);
        }
    }

    /*UPDATE ORDER*/
    public function postAjaxUpdateOrder(Request $request)
    {
        if (!$request->ajax()) {
            abort('404', 'Not Access');
        } else {
            $data = $request->input('data');
            foreach ($data as $k => $v) {
                $upt = [
                    'order' => $v,
                ];
                $obj = $this->course->find($k);
                $obj->update($upt);
            }
            return response()->json(['msg' => 'ok', 'code' => 200], 200);
        }
    }

    /*CHANGE STATUS*/
    public function updateStatus(Request $request)
    {
        if (!$request->ajax()) {
            abort('404', 'Not Access');
        } else {
            $value = $request->input('value');
            $id = $request->input('id');
            $cate = $this->course->find($id);
            $cate->status = $value;
            $cate->save();
            return response()->json([
                'mes' => 'Updated',
                'error' => false,
            ], 200);
        }
    }

}
