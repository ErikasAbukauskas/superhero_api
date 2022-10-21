<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHeroRequest extends FormRequest
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
        return [
            'name' => 'required|unique:heroes',
            'characters' => 'required|between:10,100|numeric',
            'image' => 'required',
            'alignment' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'aliases' => 'required|unique:heroes',
        ];
    }
}
