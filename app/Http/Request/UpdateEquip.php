<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateEquip extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'equipName' => 'required|string',
            'equipType' => 'required|string',
            'equipPrice' => 'required|numeric',
            'equipQuantity' => 'required|numeric',

        ];

    }
}
