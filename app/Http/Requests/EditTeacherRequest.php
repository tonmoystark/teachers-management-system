<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EditTeacherRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'age' => 'required|integer|min:18|max:60',
            'role' => 'required|string',
            'gender' => 'required|string|in:m,f',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'name.max' => 'Name must be less than 50 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'age.required' => 'Age is required',
            'age.integer' => 'Age must be an integer',
            'age.min' => 'Age must be at least 18 years old',
            'age.max' => 'Age must be at most 60 years old',
            'role.required' => 'Role is required',
            'role.string' => 'Role must be a string',
            'gender.required' => 'Gender is required',
        ];
    }
}
