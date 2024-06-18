<?php

namespace App\Http\Requests\Galeri;

use Illuminate\Foundation\Http\FormRequest;

class CreateGaleriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required',
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
