<?php

namespace App\Http\Inquiry\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateInquiryRequest extends FormRequest
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
        'material'=>'required',
        'quantity'=>'required',
        'company_id'=>'required',];
    }
}
