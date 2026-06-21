<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
         $id=$this->route('id');
        return [
                'name' => 'required|string|max:100|unique:departments,name',
                'description'=>'required|string|max:1000|'
           
        ];
    }
    public function masseges()  {
        return[
            'name.required'=>'الحقل مطلوب'
        ];
        
    }
}
