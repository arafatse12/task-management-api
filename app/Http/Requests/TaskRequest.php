<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
    public function rules()
    {
        $id = !empty($this->id) ? $this->id : null;
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required|date',
            'status' => 'required'
        ];

        if(is_null($id) === true){
            $rules['title'] = 'required';
            $rules['description'] = 'required';
            $rules['due_date'] = 'required|date';
            $rules['status'] = 'required';
        }

        return $rules;
    }
}
