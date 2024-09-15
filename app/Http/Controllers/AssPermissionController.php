<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($roles)
    {
        // $role->permissions;
        $permissions = permission::all();
        $roles = Role::with('permissions')->get();
        return view('permission.asspermission',compact('roles','permissions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->role;
        $role=Role::where('name',$request->role)->first();
        $role->givePermissionTo($request->permission);

        $request->session()->flash('msg','Permission Assinged');
        return redirect('asspermission');
    }

    public function show($role)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($role)
    {
        //
        $role = Role::with('permissions')->where('name',$role)->first();
        $permissions = permission::all();

        return view('managePermission.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $role=Role::where('name',$request->role)->first();
            $currentPermissions = $role->permissions;
            $role->revokePermissionTo($currentPermissions);
            $role->givePermissionTo($request->permission);
            flash('Pemissions updated successfully.')->success();
            return redirect()->back();
        }catch(\Exception $e)
        {
            // return $e;
            flash('Unable to update pemissions.')->error();
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
