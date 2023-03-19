<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
        $photo ='';
        if(request()->isMethod('post')){
            $photo = 'required';
        } elseif (request()->isMethod('put')){
             $photo = 'sometimes';
        }
        return [
            //
            'title' => ['required', Rule::unique('portfolios')->ignore($this->id)],
            'descripsion' => 'required',
            'type' => 'required',
            'duration' => 'required',
            'photo' => $photo,
            
        ];
    }
}
