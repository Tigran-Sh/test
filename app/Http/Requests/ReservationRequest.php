<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'user_id' => 'exists:users,id',
            'reservation_number' => 'nullable|string',
            'email' => 'unique:bookings',
            'full_name' => 'required|string',
            'phone' => 'required',
            'company_name' => 'required|string',
            'reservation_data' => 'required|array|min:3',
            'reservation_data.hotels' => 'required|array|min:1|max:2',
            'reservation_data.hotels.*' => 'exists:hotels,id',
            'reservation_data.hotel_services' => 'required|array|min:1',
            'reservation_data.hotel_services.*' => 'exists:services,id',
            'reservation_data.extra_services' => 'required|array',
        ];
    }
}
