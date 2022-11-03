<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHomeRequest extends FormRequest
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
            'image' => 'required|image|mimes:png|max:2048',
            'name' => 'required|unique:heroes',
            'character_id' => 'required:powerstat',
            'alignment' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'aliases' => 'required|unique:heroes',


            // 'intelligence' => 'required|integer',
            // 'strength' => 'required|integer',
            // 'speed' => 'required|integer',
            // 'durability' => 'required|integer',
            // 'power' => 'required|integer',
            // 'combat' => 'required|integer',
        ];

    }

    public function messages()
    {
        return ['character_id.required' =>'The powerstats field is required.'];
    }
}
