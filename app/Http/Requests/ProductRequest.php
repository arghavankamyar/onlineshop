<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|max:100',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required|min:1|integer',
            'brand_id' => 'required|integer|min:1',
            'product_img' => 'image|max:200',
            'stock' => 'required|integer',
            'scent' => 'required',
            'season' => 'required',
        ];
    }
}
