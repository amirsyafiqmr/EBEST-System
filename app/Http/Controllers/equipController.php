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
        return redirect('/view/equipment');

//        $image = $request-&gt;file('image');
//        $input['imagename'] = time().'.'.$image-&gt;getClientOriginalExtension();
//
//            $destinationPath = public_path('/thumbnail');
//            $img = Image::make($image-&gt;getRealPath());
//            $img-&gt;resize(100, 100, function ($constraint) {
//            $constraint-&gt;aspectRatio();
//                })-&gt;save($destinationPath.'/'.$input['imagename']);
//
//            $destinationPath = public_path('/images');
//             $image-&gt;move($destinationPath, $input['imagename']);
//
//             $this-&gt;postImage-&gt;add($input);
//
//            return back()
//            -&gt;with('success','Image Upload successful')
//            -&gt;with('imageName',$input['imagename']);
//        if($request->hasFile('image')){
//            $image_tmp = Input::file('image');
//              if($image_tmp->isValid()){
//
//                $extension = $image_tmp->getClientOriginalExtension();
//             $filename = rand(111,99999). '.' .$extension;
//                $image_path ='image/'.$filename;
//                Image::make($image_tmp)->save($image_path);
//
//            $input->image = $filename;
//              }}
        //return redirect('/staffMain');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('equipment.view')->with('equips', Equipment::all());
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

            return redirect('/view/equipment');
            //return redirect('/update/equipment/'.$id);
            //Session::flash('update_profile','Update profile successfully');

        } else {

            //return redirect('/update/equipment/' . $id);
            return redirect('/view/equipment');

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

                    return redirect('/view/equipment');

                } else {

                    return redirect('/view/equipment');

                }
    }
}
