<?php

namespace App\Http\Controllers;

use App\Gaurd as AppGaurd;
use App\models\Gaurd;
use App\models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class GaurdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaurds = DB::table('gaurds')->paginate(10);
        return view('gaurd.index',compact('gaurds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartment=Apartment::all();
        return view('gaurd.create',compact('apartment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required|string',
            'mobile_no'=>'required',
            'start_shift'=>'required',
            'end_shift'=>'required',
            'apartment_id'=>'required',

        ]);
        // try{
        $res=new Gaurd;
        $res->name=$request->input('name');
        $res->address=$request->input('address');
        $res->mobile_no=$request->input('mobile_no');
        $res->password=Hash::make($request->input('password'));
        $res->start_shift=$request->input('start_shift');
        $res->end_shift=$request->input('end_shift');
        $res->apartment_id=$request->input('apartment_id');
        $res->save();

        flash('Gaurd Info Stored successfully.')->success();
        return redirect('gaurd');
        // }catch(\Exception $e){
        //     flash('Unable to stored Gaurd Information. '.$e->getMessage())->error();
        //     return redirect()->back();

        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gaurd  $gaurd
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $gaurd =Gaurd::where('id',$id)->with('apartment')->firstOrFail();
        // if(!$gaurd)
        //     abort(500);
        return view('gaurd.show')->with('gaurd',$gaurd);
        // dd($gaurd);
        // return $gaurd;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gaurd  $gaurd
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $apartment=Apartment::all();
        $gaurds = Gaurd::find($id);
        return view('gaurd.edit',compact('apartment','gaurds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gaurd  $gaurd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required|string',
            'mobile_no'=>'required|',
            'start_shift'=>'required|',
            'end_shift'=>'required|',
            'apartment_id'=>'required|',

        ]);
        try{
        $res=Gaurd::find($id);
        $res->name=$request->input('name');
        $res->address=$request->input('address');
        $res->mobile_no=$request->input('mobile_no');
        $res->start_shift=$request->input('start_shift');
        $res->end_shift=$request->input('end_shift');
        $res->apartment_id=$request->input('apartment_id');
        $res->save();

        flash('Gaurd Update Stored successfully.')->success();
        return redirect('gaurd');
        }catch(\Exception $e){
            flash('Unable to Upadate Gaurd Information.')->error();
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gaurd  $gaurd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gaurd::destroy(array('id',$id));
        return redirect()->back();
    }
}
