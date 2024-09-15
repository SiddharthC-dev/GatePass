<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\Gaurd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GaurdLoginController extends Controller
{
    function index(Request $request)
    {
        $gaurd= Gaurd::where('mobile_no', $request->mobile_no)->first();
        // print_r($data);
            if (!$gaurd || !Hash::check($request->password, $gaurd->password)) {
                return response([
                    'status' => false,
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

             $token = $gaurd->createToken('my-app-token')->plainTextToken;

            $response = [
                'status' => true,
                'message' => 'Gaurd Login  successfully',
                'errors'=> null,
                'data' => [
                    'gaurd'=>$gaurd,
                    'token'=>$token
                    ]
            ];

             return response($response, 201);
    }
}
