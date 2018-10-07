<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBakeryPost extends FormRequest
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
     * @return array
     */
    public function rules($validator)
    {
        return [
            'name' => 'required|unique:bakeries|max:50',
            'categoryId' => 'required',
            'price' => 'numeric',
            'description' => 'required|max:250',
            'content' => 'required|max:250'
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'Tên cần thiết',
          'name.unique' => 'Tên bị trùng',
        ];
    }

    public function withValidator($validator)
    {
        return [
            $validator->after(function ($validator){
                if ($this->get('note') == 'whatever'){
                    $validator->errors()->add('note', 'something is wrong');
                }
            })
        ];
    }
}
