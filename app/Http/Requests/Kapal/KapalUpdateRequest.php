<?php

namespace App\Http\Requests\Kapal;

use Illuminate\Foundation\Http\FormRequest;

class KapalUpdateRequest extends FormRequest
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
            'title' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'waktu_keberangkatan' => 'required|date',
            'waktu_kedatangan' => 'required|date',
            'expired' => 'required|date',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Judul wajib diisi.',
            'keberangkatan.required' => 'Tempat keberangkatan wajib diisi.',
            'tujuan.required' => 'Tempat tujuan wajib diisi.',
            'waktu_keberangkatan.required' => 'Waktu keberangkatan wajib diisi.',
            'waktu_keberangkatan.date' => 'Format waktu keberangkatan tidak valid.',
            'waktu_kedatangan.required' => 'Waktu kedatangan wajib diisi.',
            'waktu_kedatangan.date' => 'Format waktu kedatangan tidak valid.',
            'expired.required' => 'Waktu kedaluwarsa wajib diisi.',
            'expired.date' => 'Format waktu kedaluwarsa tidak valid.',
        ];
    }
}
