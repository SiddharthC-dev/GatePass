<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
   public function index(Request $request){
       //simpy delete the token form th database


            try{
             $request->user()->CurrentAccessToken()->delete();
                return response()->json([
                'status' => true,
                'message'=>'You have Successfully Loged out!',
                'errors'=> null,
                'data'=>null
            ]);
        }
        catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to Logout',
                'errors'=>'',
                'data'=>null
                ]);

        }





   }
}
