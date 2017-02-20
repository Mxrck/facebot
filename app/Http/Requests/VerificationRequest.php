<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerificationRequest extends FormRequest
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
            'hub_mode' => 'required|in:subscribe',
            'hub_verify_token' => 'required|in:' . env('FB_MESSENGER_CALLBACK_TOKEN'),
            'hub_challenge' => 'required',
        ];
    }
}
