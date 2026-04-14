<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class workerStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => 'required|string',
            "email" => 'required|string',
            "password" => 'required|string',
            'experience_years'=>'integer',
            'work_id'=>'required|integer',
            'profile_image'=>'required|image',
            'phone'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'adress' => 'required|string' ,
            'document'=>'required|file',
        ];
    }
}