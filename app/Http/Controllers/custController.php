<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Equipment;
use App\Http\Request\UpdateCust;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class custController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            return view('customer.custMain')->with('customers', Customer::all());

    }

    public function detail($id)
    {

        //return dd(Customer::where('cust_id', $id)->first());

        $customera = Customer::where('cust_id', $id)->first();

        return view('customer.custViewAcc', compact('customera'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('')
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
    public function show()
    {
       return view('customer.equipView')->with('equips', Equipment::paginate(10));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::where('cust_id', $id)->first();

        return view('customer.custUpdateAcc', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCust $request, $id)
    {
        //return dd($request->all());
        $customer = Customer::where('cust_id', $id)->first();

        if ($customer){

            if (trim($request->password) == null){

                $input = $request->except('password');

                $customer->update(['address'=>$input['address'], 'phoneNo'=>$input['phoneNo'],
                    'companyName'=>$input['companyName'], 'companyAddress'=>$input['companyAddress'],
                    'companyPhoneNo'=>$input['companyPhoneNo'], 'companyEmail'=>$input['companyEmail']]);

                //Session::flash('update_profile','Update profile successfully');

                return redirect('/custViewAcc/'.$id)->with('success',"Your Account Has Successfully Update!");

            } else {

                $input = $request->all();

                $input['password'] = Hash::make($input['password']);

                $customer->update(['address'=>$input['address'], 'phoneNo'=>$input['phoneNo'],
                    'companyName'=>$input['companyName'],
                    'companyAddress'=>$input['companyAddress'], 'companyPhoneNo'=>$input['companyPhoneNo'],
                    'companyEmail'=>$input['companyEmail'], 'password'=>$input['password']]);

               //Session::flash('update_profile','Update profile successfully');

                return redirect('/custViewAcc/'.$id)->with('success',"Your Account Has Successfully Update!");

            }


        } else {
            return redirect('/custViewAcc/'.$id)->with('success',"Your Account Has Not Successfully Update!");
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
        //return view('staff.staffMain');
    }
}
