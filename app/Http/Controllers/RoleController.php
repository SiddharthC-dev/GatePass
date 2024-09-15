<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $roles = DB::table('roles')->paginate(10);
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'guard_name'=>'required|string',

        ]);
        try {
            $res = new Role;
            $res->name = $request->input('name');
            $res->guard_name = $request->input('guard_name');
            $res->save();
            flash('Role stored successfully.')->success();
            return redirect('role');
        } catch (\Exception $e) {
            flash('Role stored successfully.')->error();
            return redirect()->back();
        }
    }







    public function show(Role $role)
    {
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit', compact('role'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|string',
            'guard_name'=>'required|string',

        ]);
        try {
            $res = Role::find($id);
            $res->name = $request->input('name');
            $res->guard_name = $request->input('guard_name');
            $res->save();
            flash('Role Update successfully.')->success();
            return redirect('role');
        } catch (\Exception $e) {
            flash('Unable to Update Role.')->error();
            return redirect()->back();
        }
    }


    public function destroy($id)
    {
        Role::destroy(array('id', $id));
        return redirect('role');
    }
}
