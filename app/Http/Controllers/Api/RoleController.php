<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    protected function rolecreate(Request $request)
    {

        try{

            $role= Role::create([
                'name' => $request->name,
                'guard_name' => $request->guard_name,
                // 'password' => Hash::make($request->password),

            ]);

            // if($role!=null)
            //     $user->assignRole($role);
            // else
            //     $user->assignRole('user');

                return response()->json([
                    'status' => true,
                    'message' => 'Role created successfuly',
                    'errors'=> null,
                    'data'=>$role
                ]);

        }catch(\Spatie\Permission\Exceptions\RoleDoesNotExist $e)
        {
            $role->delete();
            return response()->json([
                'status' => false,
                'message' => 'unable to create role',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'something went wrong',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }

    }
}
?>
