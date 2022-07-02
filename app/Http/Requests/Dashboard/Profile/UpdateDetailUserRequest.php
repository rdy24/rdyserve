<?php

namespace App\Http\Requests\Dashboard\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetailUserRequest extends FormRequest
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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'nullable|string|max:100',
            'contact_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:12',
            'biography' => 'nullable|string|max:5000',
        ];
    }
}
