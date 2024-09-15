<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\visitor;
use Exception;
use PhpParser\Node\Stmt\Echo_;

class VisitorController extends Controller
{
    public function show($id)
    {

        try
        {
         $visitor =visitor::find($id);
         return response()->json([
            'status' => true,
            'message' => 'Visitors Show successfully',
            'errors'=> null,
            'data'=>$visitor
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
    public function store(Request $request )
    {
        $validated = $request->validated();
        try{
            $res=new visitor;
            $res->id=$request->input('id');
            $res->name=$request->input('name');
            $res->mobile_no=$request->input('mobile_no');
            $res->dob=$request->input('dob');
            $res->photo=$request->input('photo');
            $res->Address=$request->input('Address');
            $res->tag=$request->input('tag');
            $res->apartment_id=$request->input('apartment_id');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'Visitor Info create successfully',
                'errors'=> null,
                'data'=>[
                    $res->id,
                    $res->name,
                    $res->mobile_no,
                    $res->dob,
                    $res->photo,
                    $res->Address,
                    $res->tag,
                    $res->apartment_id,
                ]
            ]);


        }catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to create visitor',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
        }
 }
 public function update(Request $request,$id)
 {
    $validated = $request->validated();
    try{
        $res=Visitor::find($id);
        $res->id=$request->input('id');
        $res->name=$request->input('name');
        $res->mobile_no=$request->input('mobile_no');
        $res->dob=$request->input('dob');
        $res->photo=$request->input('photo');
        $res->Address=$request->input('Address');
        $res->tag=$request->input('tag');
        $res->apartment_id=$request->input('apartment_id');
        $res->save();
        return response()->json([
            'status' => true,
            'message' => 'Visitor Info updated successfully',
            'errors'=> null,
            'data'=>[
                $res->id,
                $res->name,
                $res->mobile_no,
                $res->dob,
                $res->photo,
                $res->Address,
                $res->tag,
                $res->apartment_id,
            ]
        ]);
     }catch(Exception $e){
         return response()->json([
             'status' => false,
             'message' => 'unable to Update Visitor',
             'errors'=> $e->getMessage(),
             'data'=>null
         ]);

     }
 }
 public function destroy($id)
 {
     try
     {
         visitor::destroy(array('id',$id));
         return response()->json([
             'status' => true,
             'message' => 'Visitor Deleted successfully',
             'errors'=> null,
             'data'=>null
         ]);
     }
     catch(Exception $e)
     {
         return response()->json([
             'status' => false,
             'message' => 'unable to Delete Visitor',
             'errors'=> $e->getMessage(),
             'data'=>null
         ]);

     }
 }

}
