<?php

namespace App\Http\Requests\staffs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'match_id' => 'required|exists:match_soccers,id',
            'role_id' => 'required|exists:roles,id',
        ];
    }
    public function messages()
    {
        return [
            'match_id.required' => __('message.required'),
            'role_id.required' => __('message.required'),
            'match_id.exists' => __('message.exists'),
            'role_id.exists' => __('message.exists'),
        ];
    }
}
