<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Staff;
use App\Http\Request\UpdateStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('staff.staffMain')->with('staffs', Customer::all());
    }

    public function detail($id)
    {
        $staffa = Staff::where('staff_id', $id)->first();

        return view('staff.staffViewAcc', compact('staffa'));
    }

    public function showStaffRegisterForm()
    {
        return view('staff.register');
    }

    protected function createStaff(Request $request)
    {
        $input = $request->validate([
            'staffId' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phoneNo' => 'required|numeric',
            'designation' => 'required',
            'email' => 'required|unique:staff,staffEmail',
            'password' => 'required|confirmed',
        ]);

        $staff = Staff::create([
            'staff_id' => $input['staffId'],
            'staffName' => $input['name'],
            'staffAddress' => $input['address'],
            'staffPhoneNo' => $input['phoneNo'],
            'staffDesignation' => $input['designation'],
            'staffEmail' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect('/register/staff')->with('success',"Staff Account Has Successfully Create!");;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::where('staff_id', $id)->first();

        return view('staff.staffUpdateAcc', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaff $request, $id)
    {
        //return dd($request->all());
        $staff = Staff::where('staff_id', $id)->first();

        if ($staff){

            if (trim($request->password) == null){

                $input = $request->except('password');

                $staff->update(['staffName'=>$input['staffName'],
                    'staffAddress'=>$input['staffAddress'], 'staffPhoneNo'=>$input['staffPhoneNo'],
                    'staffEmail'=>$input['staffEmail'], 'staffDesignation'=>$input['staffDesignation']]);

                //Session::flash('update_profile','Update profile successfully');

                return redirect('/staffViewAcc/'.$id)->with('success',"Your Account Has Successfully Update!");

            } else {

                $input = $request->all();

                $input['password'] = Hash::make($input['password']);

                $staff->update(['staffName'=>$input['staffName'],
                    'staffAddress'=>$input['staffAddress'], 'staffPhoneNo'=>$input['staffPhoneNo'],
                    'staffEmail'=>$input['staffEmail'], 'staffDesignation'=>$input['staffDesignation'],
                    'password'=>$input['password']]);

                // Session::flash('update_profile','Update profile successfully');

                return redirect('/staffViewAcc/'.$id)->with('success',"Your Account Has Successfully Update!");

            }


        } else {
            return redirect('/staffViewAcc/'.$id)->with('success',"Your Account Has Not Successfully Update!");
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
}
