<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SendQuestion extends Request
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

    // Validation rules
    public function rules()
    {
        return [
            'question' => 'required|max:100',
            'email' => 'required|email',
        ];
    }

    // Validation message
    public function messages()
    {
        return [
            'question.required' => 'Question is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be valid email',
        ];
    }
}
