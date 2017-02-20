<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswersRequest extends FormRequest
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
            'rule_id' => 'required|exists:rules,id',
            'type' => 'required_with:attachment_url|in:file,image,audio,video,text',
            'text' => 'required_if:type,text',
            'attachment_url' => 'required_if:type,image,audio,video'
        ];
    }
}
