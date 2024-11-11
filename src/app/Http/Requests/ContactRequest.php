<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required', 'email',
            'tel1' => 'required', 'integer|max:5',
            'tel2' => 'required', 'integer|max:5',
            'tel3' => 'required', 'integer|max:5',
            'address' => 'required',
            'detail' => 'required','string','max:120',
            'category_id' => 'required',
        ];
    }

    public function message()
    {
        return[
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel3.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel1.integer|max:5' => '電話番号は5桁までの数字で入力してください',
            'tel2.integer|max:5' => '電話番号は5桁までの数字で入力してください',
            'tel3.integer|max:5' => '電話番号は5桁までの数字で入力してください',
            'detail.max:120' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
