<?php

namespace App\Http\Controllers;

use App\models\VisitingRequest;
use App\models\Visitor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitingDataController extends Controller
{

    public function index(Request $request)
    {
        // $visitor=Visitor::where('id', '=', 'visitor_id')->get();
        $visit=VisitingRequest::where('user_id', '=', $request->user()->id)->with('visitorProfile')->get();
        // return $visit;
        return view('req',compact('visit'));

    }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visiting_data  $visiting_data
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visiting_data  $visiting_data
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitingRequest $visitingrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visiting_data  $visiting_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitingRequest $visitingrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visiting_data  $visiting_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitingRequest $visitingrequest)
    {
        //
    }
}
