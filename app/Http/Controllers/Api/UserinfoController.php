<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserinfoReq as RequestsUserinfoReq;
use Illuminate\Http\Request;
use UserinfoReq;
use App\models\UserInformation;
use Exception;
use PhpParser\Node\Stmt\Echo_;

class UserinfoController extends Controller
{
    //
    public function show($id)
    {
        try
        {
         $userinformation =UserInformation::find($id);
         return response()->json([
            'status' => true,
            'message' => 'User Information Show successfully',
            'errors'=> null,
            'data'=>$userinformation
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
    public function store(RequestsUserinfoReq $request )
    {
        $validated = $request->validated();
        try{
            $res=new UserInformation;
            $res->user_id=$request->input('user_id');
            $res->user_name=$request->input('user_name');
            $res->flat_no=$request->input('flat_no');
            $res->wing=$request->input('wing');
            $res->mobile_no=$request->input('mobile_no');
            $res->apartment_id=$request->input('apartment_id');
            $res->dob=$request->input('dob');


            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'User Information create successfully',
                'errors'=> null,
                'data'=>[
                    $res->user_id,
                    $res->user_name,
                    $res->flat_no,
                    $res->wing,
                    $res->mobile_no,
                    $res->apartment_id,
                    $res->dob,


                ]
            ]);


        }catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to create User Information',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
        }
 }
 public function update(RequestsUserinfoReq $request,$id)
 {
    $validated = $request->validated();
    try{
        $res=new UserInformation;
        $res->user_id=$request->input('user_id');
        $res->user_name=$request->input('user_name');
        $res->flat_no=$request->input('flat_no');
        $res->wing=$request->input('wing');
        $res->mobile_no=$request->input('mobile_no');
        $res->apartment_id=$request->input('apartment_id');
        $res->dob=$request->input('dob');


        $res->save();
        return response()->json([
            'status' => true,
            'message' => 'User Information updated successfully',
            'errors'=> null,
            'data'=>[
                $res->user_id,
                $res->user_name,
                $res->flat_no,
                $res->wing,
                $res->mobile_no,
                $res->apartment_id,
                $res->dob,


            ]
        ]);


    }catch(Exception $e)
    {
        return response()->json([
            'status' => false,
            'message' => 'unable to updated User Information',
            'errors'=> $e->getMessage(),
            'data'=>null
        ]);
    }
 }
 public function destroy($id)
 {
     try
     {
         UserInformation::destroy(array('id',$id));
         return response()->json([
             'status' => true,
             'message' => 'User Information Deleted successfully',
             'errors'=> null,
             'data'=>null
         ]);
     }
     catch(Exception $e)
     {
         return response()->json([
             'status' => false,
             'message' => 'unable to Delete User Information',
             'errors'=> $e->getMessage(),
             'data'=>null
         ]);

     }

 }

}


