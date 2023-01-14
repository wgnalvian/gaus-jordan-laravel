<?php

namespace App\Http\Requests\Bahan;

use Illuminate\Foundation\Http\FormRequest;

class BahanCountReq extends FormRequest
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
        $rules = [];
        foreach ($this->request->all() as $key => $value) {
            if(preg_match('/bahan_[0-9]+/',$key)){
                $rules[$key] = 'required';
            }
        }

        return $rules;
    }
}
