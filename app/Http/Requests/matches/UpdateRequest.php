<?php

namespace App\Http\Requests\matches;

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
        $id = $this->route()->parameter('match');
        return [
            'name' => 'required|unique:match_soccers,name,'.$id.',id',
            'rank_id' => 'required|exists:ranks,id',
            'match_code' => 'required|unique:match_soccers,match_code,'.$id.',id',
            'tournament_id' => 'required|exists:tournaments,id',
            'group_id' => 'required|exists:groups,id',
        ];
    }
    public function messages(){
        return [
            'name.required' => __('message.required'),
            'name.unique' => __('message.unique'),
            'rank_id.required' => __('message.required'),
            'rank_id.exists' => __('message.exists'),
            'match_code.required' => __('message.required'),
            'match_code.unique' => __('message.unique'),
            'tournament_id.required' => __('message.required'),
            'tournament_id.exists' => __('message.exists'),
            'group_id.required' => __('message.required'),
            'group_id.exists' => __('message.exists'),
        ];
    }
}
