<?php

namespace App\Modules\Admin\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Validator;

class RoleController extends Controller
{
    public function createRole(Request $request){
      $list_role = Role::lists('name', 'id');
      $list_per = Permission::lists('name', 'id');
      return view('Admin::auth.role', compact('list_role', 'list_per'));
    }

    public function postCreateRole(Request $request)
    {
      $rule = [
        'role_id' => 'required',
        'permission_id' => 'required',
      ];
      $valid = Validator::make($request->all(), $rule);
      if($valid->fails()){
        return redirect()->back()->withErrors($valid->errors())->withInput();
      }
      $role_id = $request->input('role_id');
      $permission_id = $request->input('permission_id');

      $role = Role::find($role_id);
      $permission = Permission::find($permission_id);
      $role->attachPermission($permission);

      return redirect('/admin/register');
    }

    public function postAjaxRole(Request $request)
    {
      if(!$request->ajax()){
        abort(404);
      }else{
        $rule = [
          'name' => 'unique:roles,name'
        ];
        $valid = Validator::make($request->all(), $rule);
        if($valid->fails()){
            return response()->json(['error' =>true, 'rs' => $valid->errors() ], 200);
        }
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = \LP_lib::unicodenospace($request->name);
        $role->description = $request->description;
        $role->save();
        $list_role = $role->lists('name', 'id');
        $view = view('Admin::ajax.ajaxRole', compact('list_role'))->render();

        return response()->json(['error' => false, 'rs' => 'Role created !', 'role' => $view], 200);
      }
    }

    public function postAjaxPermission(Request $request)
    {
      if(!$request->ajax()){
        abort(404);
      }else{
        $rule = [
          'name' => 'unique:permissions,name'
        ];
        $valid = Validator::make($request->all(), $rule);
        if($valid->fails()){
            return response()->json(['error' =>true, 'rs' => $valid->errors() ], 200);
        }
        $permission = new Permission;
        $permission->name = $request->name;
        $permission->display_name = \LP_lib::unicodenospace($request->name);
        $permission->description = $request->description;
        $permission->save();
        $list_per = $permission->lists('name', 'id');
        $view = view('Admin::ajax.ajaxPermission', compact('list_per'))->render();
        return response()->json(['error' => false, 'rs' => 'Permission created !', 'per' => $view], 200);
      }
    }

}
