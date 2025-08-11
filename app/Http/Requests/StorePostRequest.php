<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:posts,slug|max:255',
            'categoria' => 'required|max:255',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'El título es obligatorio',
            'title.min' => 'El título debe tener al menos 5 caracteres',
            'title.max' => 'El título no debe exceder los 255 caracteres',
            'slug.required' => 'El slug es obligatorio',
            'slug.unique' => 'El slug ya existe',
            'slug.max' => 'El slug no debe exceder los 255 caracteres',
            'categoria.required' => 'La categoría es obligatoria',
            'categoria.max' => 'La categoría no debe exceder los 255 caracteres',
            'content.required' => 'El contenido es obligatorio',
        ];
    }
}
