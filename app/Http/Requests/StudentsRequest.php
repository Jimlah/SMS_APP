<?php

namespace App\Http\Requests;

use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->user()->can('create', Student::class);
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'required|string',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string',
            'state_of_origin' => 'required|string',
            'home_address' => 'required|string'
        ];
    }
}
