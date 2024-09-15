<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterReq;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    protected function registerUser(RegisterReq $request)
    {
        $role = $request->type;
        $user = null;
        $validated = $request->validated();
        try{

            $user= User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);

            if($role!=null)
                $user->assignRole($role);
            else
                $user->assignRole('user');

                return response()->json([
                    'status' => true,
                    'message' => 'User created successfuly',
                    'errors'=> null,
                    'data'=>$user
                ]);

        }catch(\Spatie\Permission\Exceptions\RoleDoesNotExist $e)
        {
            $user->delete();
            return response()->json([
                'status' => false,
                'message' => 'unable to create user',
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
