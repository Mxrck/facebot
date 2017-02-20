<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
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
            'site_name' => 'required',
            'pagination' => 'required|integer',
            'mark_seen' => 'required|integer',
            'typing_on' => 'required|integer',
            'typing_off' => 'required|integer',
            'message_exception' => 'required'
        ];
    }
}
