<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('company_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string',
            ],
            'address' => [
                'required', 'string',
            ],
            'email' => [
                'required', 'string',
            ],
            'company_phone' => [
                'required', 'string',
            ],
            'npwp' => [
                'required', 'string',
            ],
            'supervisor' => [
                'required', 'string',
            ],
            'supervisor_phone' => [
                'required', 'string',
            ],
        ];
    }
}
