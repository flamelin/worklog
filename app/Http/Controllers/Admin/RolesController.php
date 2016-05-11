<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(\App\Http\Requests\RoleFormRequest $request)
    {
        $role = new Role(array(
            'name' => $request->get('name'),
            'display_name' => $request->get('display_name'),
            'description' => $request->get('description'),
        ));

        $role->save();

        return redirect('/admin/roles/create')->with('status', '角色新增成功!');
    }
}
