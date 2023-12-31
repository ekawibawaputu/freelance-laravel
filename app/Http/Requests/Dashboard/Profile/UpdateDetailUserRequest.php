<?php

namespace App\Http\Requests\Dashboard\Profile;


use App\Models\DetailUser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
            'photo' => [
                'nullable', 'file' , 'max:1024'
            ],
            'role' => [
                'required', 'string' , 'max:100'
            ],
            'contact_number' => [
                'required', 'regex:/^([0-9\s\-\+\(\)]*)$/' , 'max:12'
            ],
            'biography' => [
                'nullable', 'string' , 'max:5000'
            ],
        ];
    }
}
