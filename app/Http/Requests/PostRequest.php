<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function messages()
    {
        return[
            'title.required' => 'タイトルを入力してください。',
            'body.required' => 'メッセージを入力してください。',
        ];
    }
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
             
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    
}
