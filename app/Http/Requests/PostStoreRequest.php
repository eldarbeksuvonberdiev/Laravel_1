<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
            'likes' => 'required',
            'dislikes' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'category_id.required' => "Turni tanlang!",
        'category_id.exists' => "Id topilmadi",
        'title.required' => "Ma'lumot to'ldirilmagan!",
        'body.required' => "Ma'lumot to'ldirilmagan!",
        'image.required' => "Rasm tanlanmagan!",
        'image.mimes' => "Rasm formati noto'g'ri!",
        'likes.required' => "Soni kiritilmadi!",
        'dislikes.required' => "Soni kiritilmadi!"
        ];
    }
}
