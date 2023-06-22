<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicalRequest extends FormRequest
{

    public function prepareForValidation()
    {
        $this->merge([
            'school_id' => auth()->user()->school->id,
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'ownername' => 'required|max:255',
            'registrationno'          => 'required|min:1', 
            'chassisno' =>'required|numeric|min:1', 
            'engineno'          => 'required|numeric|min:1', 
            'fueltype' => 'max:50',
            'makermodel'          => 'max:200', 
            'school_id'   => 'required|integer|exists:schools,id',
        ];
    }
    public function messages()
    {
        return [
            'ownername.required'            => 'Owner name must not be empty',
        ];
    }
}
