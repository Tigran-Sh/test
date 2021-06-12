<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPackageRequest extends FormRequest
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
            'region_id' => 'required|exists:regions,id',
            'count' => 'required'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'region_id.required' => 'Region is required!',
            'count.required' => 'Guests is required!'
        ];
    }
}
