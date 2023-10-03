<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Emprequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname'=>'required',
            'companyid'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'please fill fullname',
            'companyid.required' => 'please fill companyid',
            'email.required' => 'please fill email',
            'phone.required' => 'please fill phone_no',
        ];
    }
}
