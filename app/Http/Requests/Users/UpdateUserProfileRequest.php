<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'origin_id' => 'nullable|min:1|max:100000000|regex:/^[0-9]+$/u|exists:origins,id',
            'firstname'=>'sometimes|string|min:1|max:1000',
            'lastname'=>'sometimes|string|min:1|max:1000',
            'position'=>'nullable|string|min:1|max:1000',
            'avatar' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'mobile_token'=>'required|string|min:1|max:1000',
        ];
    }
}
