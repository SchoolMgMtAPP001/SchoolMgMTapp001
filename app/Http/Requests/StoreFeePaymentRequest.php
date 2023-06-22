<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeePaymentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'fee_category_id' => 'required|integer|exists:fee_categories,id',
            'amount'          => 'required|numeric|min:1', 
        ];
    }
    public function messages()
    {
        return [
            'amount.required'            => 'Fine must be a number and greater than 0',
        ];
    }
}
