<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class CreatePartnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'image.required' => 'Kolom gambar wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus PNG, JPG, atau JPEG.',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 2MB.',
            'title.required' => 'Kolom judul wajib diisi.',
        ];
    }
}
