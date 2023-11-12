<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'publish_at' => 'date_format:Y-m-d H:i:s'
        ];
    }

    public function messages() :array
    {
        return [
            'publish_at.date_format' => 'Неверный формат даты публикации'
        ];
    }
}
