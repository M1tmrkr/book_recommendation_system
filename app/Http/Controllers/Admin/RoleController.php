<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;


class RoleController extends DM_BaseController
{
    protected $panel = 'Role';
    protected $base_route = 'admin.roles';
    protected $view_path = 'admin.roles';
    protected $model;
    protected $table;
    protected $folder = 'document';

    function __construct()
    {
        //  $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    public function index(Request $request)
    {
      
        $data['roles'] = Role::orderBy('id','DESC')->get();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }
    
    public function create()
    {
        $data['permission'] = Permission::get();
        return view(($this->view_path . '.create'), compact('data'));

    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        session()->flash('alert-success','Role created successfully !');
        return redirect()->route('admin.roles.index')
                        ->with('success','Role created successfully');
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
    
        return view('roles.show',compact('role','rolePermissions'));
    }
    
    public function edit($id)
    {
        $data['role'] = Role::find($id);
        $data['permission'] = Permission::get();
        $data['rolePermissions'] = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
            return view(($this->view_path . '.edit'), compact('data'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
        session()->flash('alert-success','User  Role updated successfully !');
        return redirect()->route('admin.roles.index')
                        ->with('success','Role updated successfully');
    }

    public function delete($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        session()->flash('alert-success','User  Role deleted successfully !');

        return redirect()->route('admin.roles.index')
                        ->with('success','Role deleted successfully');
    }
}
