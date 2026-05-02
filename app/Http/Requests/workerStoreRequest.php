<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class workerStoreRequest extends FormRequest
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
            "name" => 'required|string|between:3,15',
            "email" => 'required|string|email',
            "password" => 'required|string|between:6,30',
            'experience_years'=>'integer',
            'work_id'=>'required|integer',
            'profile_image'=>'required|image',
            'phone'=>'required|between:10,20',
            'latitude'=>'required',
            'longitude'=>'required',
            'adress' => 'required|string' ,
        ];
    }
}