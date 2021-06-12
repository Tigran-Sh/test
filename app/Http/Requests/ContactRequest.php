<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'website' => 'nullable|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|max:50',
            'fax' => 'nullable|max:50',
            'zip' => 'nullable|max:50',
            'city' => 'nullable|max:255',
            'street' => 'nullable|max:255',
            'house' => 'nullable|max:50',
            'description_de' => 'string|max:10000',
            'description_en' => 'string|max:10000'
        ];
    }
}
