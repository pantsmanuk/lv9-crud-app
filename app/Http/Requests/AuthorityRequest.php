<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorityRequest extends FormRequest
{
    /**
     * Determine if the user is authorised to make the request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'auth_code' => ['required', 'max:4'],
            'auth_name' => ['required', 'max:255'],
            'usrn_start' => ['max:8'],
            'usrn_end' => ['max:8'],
            'lad_code' => ['max:9'],
            'lad_name' => ['max:255']
        ];
    }
}
