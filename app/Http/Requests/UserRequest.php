<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->id . ',id',
            'password' => 'required|min:6|max:255',
            'address' => 'required|max:100',
            'phone' => 'required|max:45',
            'roles' => 'required|array',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => trans('validation.required'),
            'email.required' => trans('validation.required'),
            'password.required' => trans('validation.required'),
            'address.required' => trans('validation.required'),
            'phone.required' => trans('validation.required'),
            'roles.required' => trans('validation.required'),
        ];
    }

    /**
     * Custom attribute for validation
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'email address',
            'phone' => 'phone number',
        ];
    }
}
