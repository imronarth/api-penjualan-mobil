<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
            case 'PUT':
            case 'PATCH':
                return [
                    'merk' => 'required',
                    'seri' => 'required',
                    'silinder' => 'nullable',
                    'tipe' => 'nullable',
                    'sub_tipe' => 'nullable',
                    'transmisi' => 'required',
                    'tahun' => 'required|integer',
                    'bahan_bakar' => 'required',
                    'penggerak' => 'required',
                ];
            default:
                return [];
        }
    }
}
