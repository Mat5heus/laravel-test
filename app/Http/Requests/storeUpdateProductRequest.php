<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdateProductRequest extends FormRequest
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
            'name' => 'required|min:2|max:244',
            'description' => 'nullable|min:3|max:2333'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Nome não é uma opção, seu elemento!'
        ];
    }
}
