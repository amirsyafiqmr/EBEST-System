<?php

namespace App\Http\Controllers\Auth;

use App\Staff;
use App\User;
use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:staff');
        $this->middleware('guest:customer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showStaffRegisterForm()
    {
        return view('auth.register', ['url' => 'staff']);
//        return view('auth.register');
    }

    public function showCustomerRegisterForm()
    {
        return view('customer.register');
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

        return redirect()->intended('login/staff');

    }

    protected function createCustomer(Request $request)
    {
        $input = $request->validate([
            'custId' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phoneNo' => 'required|numeric',
            'gender' => 'required',
            'email' => 'required|unique:customer,email',
            'password' => 'required|confirmed',
            'companyName' => 'required',
            'companyAddress' => 'required',
            'companyPhoneNo' => 'required|numeric',
            'companyEmail' => 'required',
        ]);

        $customer = Customer::create([
            'cust_id' => $input['custId'],
            'name' => $input['name'],
            'address' => $input['address'],
            'phoneNo' => $input['phoneNo'],
            'gender' => $input['gender'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'companyName' => $input['companyName'],
            'companyAddress' => $input['companyAddress'],
            'companyPhoneNo' => $input['companyPhoneNo'],
            'companyEmail' => $input['companyEmail'],

        ]);
        return redirect()->intended('login/customer');
    }
}
