<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'category_id' => ['required', 'exists:categories,id'],
            'price' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'string', 'max:255'],
        ];
    }
}