<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Exception;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function store(PermissionReq $request)
    {
        $validated = $request->validated();
        try{
            $res = new Permission;
            $res->name = $request->input('name');
            $res->guard_name = $request->input('guard_name');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'Permission created successfully',
                'errors'=> null,
                'data'=>[
                    $res->name,
                    $res->guard_name
                ]

            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'unable to create Permission',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }
    }
    public function update(PermissionReq $request, $id)
    {
        $validated = $request->validated();
        try{
            $res = Permission::find($id);
            $res->name = $request->input('name');
            $res->guard_name = $request->input('guard_name');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'Permission created successfully',
                'errors'=> null,
                'data'=>[
                    $res->name,
                    $res->guard_name
                ]

            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'unable to Update Permission',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
        }
    }
    public function destroy($id){
        try{
            Permission::destroy(array('id', $id));
            return response()->json([
                'status' => true,
                'message' => 'Permission Delete successfully',
                'errors'=> null
            ]);

        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'unable to Delete Permission',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }

    }
}
