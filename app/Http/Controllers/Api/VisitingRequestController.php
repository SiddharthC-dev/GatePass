<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisitorreqReq;
use App\models\Visitor;
use App\models\VisitingRequest;
use Exception;
use Illuminate\Http\Request;

class VisitingRequestController extends Controller
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
    public function store(Request $request)
    {
        try{
            $res=new VisitingRequest;
            $res->visitor_id=$request->input('visitor_id');
            $res->flate_No=$request->input('flate_No');
            $res->meeting_Purpose=$request->input('meeting_Purpose');
            $res->vehicle_no=$request->input('vehicle_no');
            $res->user_id=$request->input('user_id');
            $res->user_name=$request->input('user_name');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'Request Create Successfully',
                'errors'=> null,
                'data'=>$res

        ]);
        }catch(Exception $e){

            return response()->json([
                'status' => false,
                'message' => 'something went wrong',
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
         $request = VisitingRequest::findOrFail($id);
         return response()->json([
            'status' => true,
            'message' => 'Request Show successfully',
            'errors'=> null,
            'data'=>$request
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
    public function update(VisitorreqReq $request, $id)
    {



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            VisitingRequest::destroy(array('id', $id));
            return response()->json([
                'status' => true,
                'message' => 'Request Delete successfully',
                'errors'=> null
            ]);

        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'unable to Delete Request',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }


    }
}
