<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class trackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tracking.staffView')->with('details', Booking::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $trackings = Booking::where('book_id', $id)->first();

        return view('tracking.create', compact('trackings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $input = $request->validate([
            'trackLocation' => 'required',
            'dateTimeTrack' => 'required',

        ]);

        $tracking = Tracking::create([

            'trackLocation' => $input['trackLocation'],
            'dateTimeTrack' => $input['dateTimeTrack'],
            'book_id' => $id,

        ]);
        return redirect('/staffView/tracking')->with('success','The Customer Tracking Number ' .$tracking->book_id. ' Has Successfully Create!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('tracking.search')->with('search', Tracking::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($tracking = Tracking::where('book_id', $id)->first()) {

            return view('tracking.update', compact('tracking'));

        } else {
//            return "success";
            $details = Booking::all();

            return redirect('/staffView/tracking')->with([ '$details' => $details, 'notsuccess' => 'Record not found. Please create first!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tracking = Tracking::where('book_id', $id)->first();

        if ($tracking){

            $input = $request->validate([
                'trackLocation' => 'required',
                'dateTimeTrack' => 'required',

            ]);

            $tracking->update([
                'trackLocation' => $input['trackLocation'],
                'dateTimeTrack' => $input['dateTimeTrack'],
                'book_id' => $id,
            ]);

            return redirect('/update/tracking/'. $id)->with('success','The Customer Tracking Number ' .$tracking->book_id. ' Has Successfully Update!');
            //return redirect('/update/equipment/'.$id);
            //Session::flash('update_profile','Update profile successfully');

        } else {

            //return redirect('/update/equipment/' . $id);
            return redirect('/update/tracking/'. $id)->with('notsuccess','The Customer Tracking Number ' .$tracking->book_id. ' Has Not Successfully Update!');

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
        //
    }

    public function search()

    {
        $q = Input::get ( 'q' );
        $user = Tracking::where('book_id','LIKE','%'.$q.'%')->get();
        if(count($user) > 0)
            return view('tracking.search')->withDetails($user)->withQuery ( $q );
        else
            return view ('tracking.search')->withMessage('No Details found. Try to search again !');
    }
}
