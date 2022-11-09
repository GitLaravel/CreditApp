<?php

namespace App\Http\Requests\CreditResult;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'surname'    => 'string',
            'name'       => 'string',
            'patronymic' => 'string',
            'birthday'   => 'date',
            'employment' => 'required',
            'loan_amount'=> 'integer',
            'loan_term'  => 'integer',
            'nationality'=> 'string',
            'tel'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'      => 'email',
            'approval'   => 'accepted',
        ];
    }
}
