<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateCust extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            //'name' => 'required|string',
            //'email' => 'required|string|unique:customer,email,'.Auth::guard('customer')->user()->cust_id.',cust_id',
            'password' => 'nullable|confirmed|min:6',
            'address' => 'required|string',
            'phoneNo' => 'required|numeric|digits_between:10,15',
            'companyName' => 'required|string',
            'companyAddress' => 'required|string',
            'companyPhoneNo' => 'required|numeric|digits_between:10,15',
            'companyEmail' => 'required|string',

        ];
    }

}
