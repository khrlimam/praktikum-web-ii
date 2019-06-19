<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BetaRequest extends FormRequest
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
            'merek' => 'required',
            'pembuat' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'tipe' => 'required'
        ];
    }
}
