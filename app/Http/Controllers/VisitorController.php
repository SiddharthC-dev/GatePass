<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitorReq;
use App\models\Visitor;
use App\models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = DB::table('visitors')->paginate(10);
        return view('visitors.index',compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartment=Apartment::all();
        return view('visitors.create',compact('apartment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'mobile_no'=>'required',
            'dob'=>'required',
             'photo'=>'required',
            'Address'=>'required',
            'tag'=>'required',
            'apartment_id'=>'required'
        ]);
        try{
            $res=new Visitor;
            $res->name=$request->input('name');
            $res->mobile_no=$request->input('mobile_no');
            $res->dob=$request->input('dob');
            $res->photo=$request->input('photo');
            $res->Address=$request->input('Address');
            $res->tag=$request->input('tag');
            $res->apartment_id=$request->input('apartment_id');
            $res->save();

            flash('visitor Stored successfully.')->success();
            return redirect('visitor');
            }catch(\Exception $e){
                flash('Unable to stored visitor.')->error();
                return redirect()->back();

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visitors =Visitor::where('id',$id)->with('apartment')->firstOrFail();
        return view('visitors.show')->with('visitors',$visitors);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment=Apartment::all();
        $visitors = Visitor::find($id);
        return view('visitors.edit',compact('visitors','apartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'mobile_no'=>'required',
            'dob'=>'required',
             'photo'=>'required',
            'Address'=>'required',
            'tag'=>'required',
            'apartment_id'=>'required'
        ]);
        try{
            $res=Visitor::find($id);
            $res->name=$request->input('name');
            $res->mobile_no=$request->input('mobile_no');
            $res->dob=$request->input('dob');
            $res->photo=$request->input('photo');
            $res->Address=$request->input('Address');
            $res->tag=$request->input('tag');
            $res->apartment_id=$request->input('apartment_id');
            $res->save();

        flash('visitor updated successfully.')->success();
        return redirect('visitor');
        }catch(\Exception $e){
            flash('Unable to update visitor.')->error();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visitor::destroy(array('id',$id));
        return redirect()->back();
    }
}
