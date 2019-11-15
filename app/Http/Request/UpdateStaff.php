<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateStaff extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
                'staffName' => 'required|string',
                'staffEmail' => 'required|string|unique:staff,staffEmail,'.Auth::guard('staff')->user()->staff_id.',staff_id',
                'password' => 'nullable|confirmed|min:6',
                'staffAddress' => 'required|string',
                'staffPhoneNo' => 'required|numeric|digits_between:10,15',
                'staffDesignation' => 'required|string',

                ];

    }
}
