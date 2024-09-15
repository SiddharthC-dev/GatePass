<?php

namespace App\Http\Controllers;

use App\gatepass;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class GatepassController extends Controller
{





    public function roleCreate($role){

        $role = Role::create(['name' => $role]);
         return $role;

    }
    // public function roleCreate(Request $request){

    //     $role = Role::create(['name' => $request->role]);
    //      return $role;

    // }

    public function rolePermission($name){

        $permission = Permission::create(['name' => $name]);
         return $permission;

    }

    public function assignPermission($role,$permission){

        $role = Role::where('name',$role)->first();
        $role->givePermissionTo($permission);
        return $role;

    }


    public function findName(Request $request){
        $user=User::select('name')->where('id',$request->id)->first();
        return response()->json($user);

    }





}
