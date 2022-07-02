<?php

namespace App\Http\Requests\Dashboard\MyOrder;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMyOrderRequest extends FormRequest
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
            'buyer_id' => 'required|integer',
            'service_id' => 'required|integer',
            'freelancer_id' => 'required|integer',
            'file' => 'nullable|mimes:zip',
            'note' => 'required|string|max:5000',
            'expired' => 'required|date',
            'order_status_id' => 'nullable|integer',
        ];
    }
}
