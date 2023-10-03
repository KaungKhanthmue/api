<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Comrequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'logo'=>'required',
            'website'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'please fill name',
            'email.required' => 'please fill Email',
            'logo.required' => 'please fill Logo',
            'website.required' => 'please fill Websitename'
        ];
    }
        
    }

