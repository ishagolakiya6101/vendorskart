<?php

namespace App\Http\Branch\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateBranchRequest extends FormRequest
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
        'name'=>'required',
        'address'=>'required',
        'contact_person'=>'required',
        'company_id'=>'required',];
    }
}
