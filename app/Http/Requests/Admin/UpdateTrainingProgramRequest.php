<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTrainingProgramRequest extends FormRequest
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
            'icon' => 'required',
            'name' => 'required',
            'order' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'icon.required'  => 'The icon must be entered',
            'name.required' => 'The name must be entered',
            'order.required'  => 'The order number must be entered',
        ];
    }
}
