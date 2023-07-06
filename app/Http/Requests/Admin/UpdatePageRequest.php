<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
        return [
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'url' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title must be entered',
            'description.required' => 'The description must be entered',
            'body.required'  => 'The body must be entered',
            'url.required'  => 'The url must be entered',
        ];
    }
}
