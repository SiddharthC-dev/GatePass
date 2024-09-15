<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssPermissionController extends Controller
{
    public function store(Request $request)
    {

        try{
            $role=Role::where('name',$request->role)->first();
            $role->givePermissionTo($request->permission);

            return response()->json([
                'status' => true,
                'message' => 'Give Permission successfully',
                'errors'=> null,
                'data'=>[
                    $request->role,
                    $request->permission
                ]
            ]);

        }catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'something went wrong',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }
    }
    public function update(Request $request, $id){
        try{
            $role=Role::where('name',$request->role)->first();
            $currentPermissions = $role->permissions;
            $role->revokePermissionTo($currentPermissions);
            $role->givePermissionTo($request->permission);
            return response()->json([
            'status' => true,
            'message' => 'Give Permission successfully',
            'errors'=> null,
            'data'=>[
                $request->role,
                $request->permission
            ]
        ]);

        }catch(\Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'something went wrong',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }
    }

}
