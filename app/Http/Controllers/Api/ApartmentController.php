<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\Apartment;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class ApartmentController extends Controller
{

    public function show($id)
    {
        try
        {
         $apartment = Apartment::find($id);
         return response()->json([
            'status' => true,
            'message' => 'Apartment Show successfully',
            'errors'=> null,
            'data'=>$apartment
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
    public function store(apartment $request )
    {
        $validated = $request->validated();
        try{
            $res=new Apartment;
            $res->apartment_name=$request->input('apartment_name');
            $res->apartment_address=$request->input('apartment_address');
            $res->apartment_city=$request->input('apartment_city');
            $res->apartment_district=$request->input('apartment_district');
            $res->apartment_state=$request->input('apartment_state');
            $res->apartment_pin_code=$request->input('apartment_pin_code');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'Apartment create successfully',
                'errors'=> null,
                'data'=>[
                    $res->apartment_name,
                    $res->apartment_address,
                    $res->apartment_city,
                    $res->apartment_district,
                    $res->apartment_state,
                    $res->apartment_pin_code,
                ]
            ]);


        }catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to create Apartment',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);
        }
    }
    public function update(Request $request,$id)
    {
        try{
            $res=Apartment::find($id);
            $res->apartment_name=$request->input('apartment_name');
            $res->apartment_address=$request->input('apartment_address');
            $res->apartment_city=$request->input('apartment_city');
            $res->apartment_district=$request->input('apartment_district');
            $res->apartment_state=$request->input('apartment_state');
            $res->apartment_pin_code=$request->input('apartment_pin_code');
            $res->save();
            return response()->json([
                'status' => true,
                'message' => 'Apartment update successfully',
                'errors'=> null,
                'data'=>[
                    $res->apartment_name,
                    $res->apartment_address,
                    $res->apartment_city,
                    $res->apartment_district,
                    $res->apartment_state,
                    $res->apartment_pin_code,
                ]
            ]);

        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'unable to Update Apartment',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }
    }
    public function destroy(Apartment $apartment,$id)
    {
        try
        {
            Apartment::destroy(array('id',$id));
            return response()->json([
                'status' => true,
                'message' => 'Apartment Deleted successfully',
                'errors'=> null,
                'data'=>$apartment
            ]);
        }
        catch(Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'unable to Delete Apartment',
                'errors'=> $e->getMessage(),
                'data'=>null
            ]);

        }
    }


}
