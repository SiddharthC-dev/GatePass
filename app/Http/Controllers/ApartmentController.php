<?php

namespace App\Http\Controllers;

use App\models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{

    public function index()
    {
        //
        $apartments = DB::table('apartments')->paginate(10);
        return view('aparatment.index',compact('apartments'));
    }
    public function create()
    {

        return view('aparatment.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'apartment_name'=>'required',
            'apartment_address'=>'required',
            'apartment_city'=>'required|string',
            'apartment_district'=>'required|string',
            'apartment_state'=>'required|string',
            'apartment_pin_code'=>'required|digits:6'
        ]);
        try{
        $res=new Apartment;
        $res->apartment_name=$request->input('apartment_name');
        $res->apartment_address=$request->input('apartment_address');
        $res->apartment_city=$request->input('apartment_city');
        $res->apartment_district=$request->input('apartment_district');
        $res->apartment_state=$request->input('apartment_state');
        $res->apartment_pin_code=$request->input('apartment_pin_code');
        $res->save();

        flash('Apartment Stored successfully.')->success();
        return redirect('aparatment');
        }catch(\Exception $e){
            flash('Unable to stored Apartment.')->error();
            return redirect()->back();

        }
    }
    public function show($id)
    {
         $apartment = Apartment::find($id);
        return view('aparatment.show')->with('apartment',$apartment);
    }
    public function edit($id)
    {
        $apartment = Apartment::find($id);
        return view('aparatment.edit',compact('apartment'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'apartment_name'=>'required',
            'apartment_address'=>'required',
            'apartment_city'=>'required|string',
            'apartment_district'=>'required|string',
            'apartment_state'=>'required|string',
            'apartment_pin_code'=>'required|digits:6'

        ]);
        try{
        $res=Apartment::find($id);
        $res->apartment_name=$request->input('apartment_name');
        $res->apartment_address=$request->input('apartment_address');
        $res->apartment_city=$request->input('apartment_city');
        $res->apartment_district=$request->input('apartment_district');
        $res->apartment_state=$request->input('apartment_state');
        $res->apartment_pin_code=$request->input('apartment_pin_code');
        $res->save();

        flash('Apartment updated successfully.')->success();
        return redirect('aparatment');
        }catch(\Exception $e){
            flash('Unable to update Apartment.')->error();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment,$id)
    {
        Apartment::destroy(array('id',$id));
        return redirect()->back();

    }
}
