<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            //
            'password' => 'required|min:8|string',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'パスワードを入力してください',
            'password.min' => '8文字以上で入力してください',
        ];
    }
}
