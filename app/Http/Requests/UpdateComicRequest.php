<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:64',
            'description' => 'nullable|max:4000',
            'thumb' => 'nullable|max:1024|url',
            'price' => 'required|numeric|min:3|max:10000',
            'series' => 'nullable|max:64',
            'sale_date' => 'required|date',
            'type' => 'nullable|max:16'
        ];
    }

    public function messages(): array 
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve avere un massimo di 64 caratteri',
            'description.max' => 'La descrizione deve avere un massimo di 4000 caratteri',
            'thumb.max' => 'La thumb deve avere una lunghezza massima di 1024 caratteri',
            'thumb.url' => 'La thumb deve essere un link URL',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere compreso tra un minimo di 3 e un massimo di 10000',
            'price.max' => 'Il prezzo deve essere compreso tra un minimo di 3 e un massimo di 10000',
            'series.max' => 'La series deve avere un massimo di 64 caratteri',
            'sale_date.required' => 'La sale date è obbligatoria',
            'sale_date.date' => 'La sale date deve essere una data',
            'type.max' => 'Il type deve avere un massimo di 16 caratteri',
            // 'type.in' => 'Il type può essere comic book, action movie oppure graphic novel'
        ];
    }
}
