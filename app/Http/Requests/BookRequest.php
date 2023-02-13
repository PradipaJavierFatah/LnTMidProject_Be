<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required|string|min:5|max:20',
            'umur' => 'required|integer|min:20',
            'alamat' => 'required|string|min:10|max:40',
            'telfon' => 'required|string|regex:/^08[0-9]{8,12}$/'
            // 'telfon' => 'required|string|min:9|max:12'
        ];
    }
}
