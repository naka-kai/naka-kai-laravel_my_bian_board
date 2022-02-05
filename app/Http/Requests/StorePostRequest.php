<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required',
            'name' => 'required',
            'age' => 'required',
            'prefecture' => 'required',
            'email' => 'required|email',
            'content' => 'required',
            'password' => 'required|min:8|confirmed|string',
            'password_confirmation' => 'required',
            'check' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください',
            'name.required' => 'お名前を入力してください',
            'age.required' => '年齢を入力してください',
            'prefecture.required' => 'お住まいを入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'content.required' => '投稿内容を入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => '8文字以上で入力してください',
            'password.confirmed' => 'パスワードが一致しません',
            'password_confirmation.required' => 'パスワード確認を入力してください',
            'check.required' => '注意事項を確認してください'
        ];
    }
}
