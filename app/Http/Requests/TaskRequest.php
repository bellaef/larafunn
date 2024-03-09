<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        ///return false;
        return true;
    }
    // @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
        ];
    }
}
