<?php

namespace App\Http\Controllers;

use App\models\UserInformation;
use App\models\Apartment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userinformations = DB::table('user_information')->paginate(10);
        return view('userinformation.index',compact('userinformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartment=Apartment::all();
        $users=User::all();
        return view('userinformation.create',compact('apartment','users'));
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
            'user_id'=>'required',
            'user_name'=>'required',
            'flat_No'=>'required|digits:3',
            'wing'=>'required|string',
            'type'=>'required|string',
            'email'=>'required|string',
            'mobile_No'=>'required|digits:10',
            'occupation'=>'required|string',
            'dob'=>'required|date',
            'apartment_id'=>'required|string'

        ]);
        try{
            $res=new UserInformation;
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

            flash('userinformation Stored successfully.')->success();
            return redirect('userinformation');
            }catch(\Exception $e){
                flash('Unable to stored userinformation.')->error();
                return redirect()->back();

            }
    }


    public function show($id)
    {
        $userinformation = UserInformation::findOrFail($id);
        return view('userinformation.show',compact('userinformation'));
    }


    public function edit(Request $request,$id)
    {
        $apartment=Apartment::all();
        $userinformation = UserInformation::findOrFail($id);
        return view('userinformation.edit',compact('userinformation','apartment'));
    }


    public function update(Request $request,$user_id)
    {
        $request->validate([
            'user_id'=>'required',

            'flat_No'=>'required|digits:3',
            'wing'=>'required|string',
            'type'=>'required|string',
            'email'=>'required|string',
            'mobile_No'=>'required|digits:10',
            'occupation'=>'required|string',
            'dob'=>'required|date',
            'apartment_id'=>'required|string'
        ]);
        try{
            $res=UserInformation::find($user_id);
            $res->id=$request->input('user_id');
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
            flash('userinformation updated successfully.')->success();
            return redirect('');
            }catch(\Exception $e){
                flash('Unable to update userinformation.')->error();
                return redirect()->back();
            }
        }
    //     /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\models\Apartment  $apartment
    //  * @return \Illuminate\Http\Response
    //  */
        public function destroy($id){
            UserInformation::destroy(array('id',$id));
        return redirect()->back();
    }
    public function findInfo(Request $request){
        $data['name'] = User::where("id",$request->id) ->get(["name"]);
        $data['email'] = User::where("id",$request->id) ->get(["email"]);

        return response()->json($data);
    }
}
