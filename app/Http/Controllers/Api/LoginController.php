<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Exception;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);


            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'status' => false,
                    'message' => 'These credentials do not match our records.'

                ], 404);
            }

             $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'status' => true,
                'message' => 'User Login successfully',
                'errors'=> null,
                'data' => $user,
                'token' => $token
            ];

             return response($response, 201);
    }


}
?>
