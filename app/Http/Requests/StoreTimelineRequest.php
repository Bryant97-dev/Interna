<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTimelineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin_timeline_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => [
                'required', 'date',
            ],
            'time' => [
                'required',
            ],
            'title' => [
                'required', 'string',
            ],
            'description' => [
                'nullable', 'string',
            ],
            'study_program_id' => [
                'required', 'integer',
            ],
        ];
    }
}
