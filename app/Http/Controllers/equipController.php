<?php

namespace App\Http\Controllers;

use Intervention\Image\Image;
use App\Equipment;
use Illuminate\Http\Request;
use App\Http\Request\UpdateEquip;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class equipController extends Controller
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
        //  $customera = Customer::where('cust_id', $id)->first();
        //
        //        return view('customer.custViewAcc', compact('customera'));
    }

    public function showCreateEquipmentForm()
    {
        //$staff = Staff::where('staff_id', $id)->first();

        return view('equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'equipName' => 'required',
            'equipType' => 'required',
            'equipPrice' => 'required|numeric',
            'equipQuantity' => 'required|numeric',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $equipment = Equipment::create([

            'equipName' => $input['equipName'],
            'equipType' => $input['equipType'],
            'equipPrice' => $input['equipPrice'],
            'equipQuantity' => $input['equipQuantity'],
            'staff_id' => Auth::guard('staff')->user()->staff_id,
            'image' => $new_name

        ]);
        return redirect('/view/equipment')->with('success', $equipment->equipName. ' Has Successfully Create!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('equipment.view')->with('equips', Equipment::paginate(4));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::where('equip_id', $id)->first();

        return view('equipment.update', compact('equipment'));
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
        $equipment = Equipment::where('equip_id', $id)->first();

        if ($equipment){

            $input = $request->validate([
                'equipName' => 'required',
                'equipType' => 'required',
                'equipPrice' => 'required|string',
                'equipQuantity' => 'required|numeric'
            ]);

            $equipment->update([
                'equipName' => $input['equipName'],
                'equipType' => $input['equipType'],
                'equipPrice' => $input['equipPrice'],
                'equipQuantity' => $input['equipQuantity'],
                'staff_id' => Auth::guard('staff')->user()->staff_id,
            ]);

            return redirect('/view/equipment')->with('success','Equipment ' .$equipment->equipName.  ' Has Successfully Update!');
            //return redirect('/update/equipment/'.$id);
            //Session::flash('update_profile','Update profile successfully');

        } else {

            //return redirect('/update/equipment/' . $id);
            return redirect('/view/equipment')->with('success','Equipment ' .$equipment->equipName.  ' Has Successfully Update!');

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
        $equipname = Equipment::where('equip_id', $id)->first();

                if ($equipname){

                    $equipname->delete();

                    //Session::flash('complaint_deleted', 'The complaint has been deleted');

                    return redirect('/view/equipment')->with('success',"The Equipment Has Successfully Delete!");

                } else {

                    return redirect('/view/equipment')->with('success',"The Equipment Has Successfully Delete!");

                }
    }
}
