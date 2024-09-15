<?php

namespace App\Http\Controllers\Api;

use App\models\UserInformation;
use App\models\Apartment;
use App\User;
use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserinfoReq;
use Illuminate\Http\Request;

class UserInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(UserinfoReq $request)
    {
        $user=$request->user();
        // return $user;
        $validated = $request->validated();
        try{
            $res=new UserInformation;
            $res->user_id=$user->id;
            $res->user_name=$request->input('user_name');
            $res->flat_No=$request->input('flat_No');
            $res->wing=$request->input('wing');
            $res->type=$request->input('type');
            $res->email=$request->input('email');
            $res->mobile_No=$request->input('mobile_No');
            $res->occupation=$request->input('occupation');
            $res->dob=$request->input('dob');
            $res->apartment_id=$request->input('apartment_id');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'UserInformation Info create successfully',
                'errors'=> null,
                'data'=>[
                    $res->user_id,
                    $res->user_name,
                    $res->flat_No,
                    $res->wing,
                    $res->type,
                    $res->email,
                    $res->mobile_No,
                    $res->occupation,
                    $res->dob,
                    $res->apartment_id
                ]
            ]);


        }catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to create UserInformation',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try
        {
         $userinformation =UserInformation::find($id);
         return response()->json([
            'status' => true,
            'message' => 'Userinformation Show successfully',
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserinfoReq $request, $id)
    {
        $validated = $request->validated();
        try{
            $res=UserInformation::find($id);
            $res->user_id=$request->input('user_id');
            $res->user_name=$request->input('user_name');
            $res->flat_No=$request->input('flat_No');
            $res->wing=$request->input('wing');
            $res->type=$request->input('type');
            $res->email=$request->input('email');
            $res->mobile_No=$request->input('mobile_No');
            $res->occupation=$request->input('occupation');
            $res->dob=$request->input('dob');
            $res->apartment_id=$request->input('apartment_id');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'UserInformation Info create successfully',
                'errors'=> null,
                'data'=>[
                    $res->user_id,
                    $res->user_name,
                    $res->flat_No,
                    $res->wing,
                    $res->type,
                    $res->email,
                    $res->mobile_No,
                    $res->occupation,
                    $res->dob,
                    $res->apartment_id
                ]
            ]);


        }catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to create UserInformation',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
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
        try
        {
            UserInformation::destroy(array('id',$id));
            return response()->json([
                'status' => true,
                'message' => 'UserInformation Deleted successfully',
                'errors'=> null,
                'data'=>null
            ]);
        }
        catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to Delete UserInformation',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }
    }
}
